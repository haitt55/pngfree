<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
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
        return view('admin.manage.list_user', ['users' => User::getAllUsers($request->name, $request->email)]);
    }
}