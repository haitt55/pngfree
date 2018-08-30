<?php

namespace App\Http\Controllers\Front;

class HomeController extends AbstractFrontController
{
	public function index()
    {
        return view('index');
    }
}