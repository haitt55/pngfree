<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserLoginRequest;
use App\User;
use Hash;
use Illuminate\Auth\Events\Registered;

class AuthController extends AbstractFrontController
{
    /**
     * logout action
     * @return redirect
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    /**
     * register action
     * @return json
     */
    public function register(UserRegisterRequest $req)
    {
        event(new Registered($user = User::create([
            'name'     => $req->name,
            'email'    => $req->email,
            'password' => Hash::make($req->password),
        ])));
        auth()->guard()->login($user);
        return response()->json(['success' => true]);
    }

    /**
     * login action
     * @return json
     */
    public function login(UserLoginRequest $req)
    {
        if (auth()->attempt(['email' => $req->email, 'password' => $req->password], (boolean) $req->remember)) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false, 'message' => 'User or password not found.']);
    }
}
