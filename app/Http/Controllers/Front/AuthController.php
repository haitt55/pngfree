<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;

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
     * @return redirect
     */
    public function register(UserRegisterRequest $req)
    {
    	
    }
}
