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
        return redirect()->route('front.home');
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
        if (auth()->attemp(['email' => $req->email, 'password' => $req->password])) {
            return response()->json();
        }
    }
}
