<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.manage.index');
    }

    public function listUser(Request $request)
    {
        return view('admin.manage.list_user', ['users' => User::getAllUsers($request->name, $request->email), 'allStatus' => User::getAllStatus()]);
    }

    public function changeStatus(Request $request)
    {
        return User::changeStatus($request->user_id, $request->payment_id);
    }

    public function changeActiveStatus(Request $request)
    {
        return User::changeActiveStatus($request->user_id);
    }

    public function deleteUser(Request $request)
    {
        if (User::deleteUser($request->user_id)) {
            Session::flash('success', 'Delete success!');
            return redirect()->route('admin.listUser');
        }
    }
}
