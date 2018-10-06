<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\General;

abstract class AbstractFrontController extends Controller
{
    public function __construct()
    {
    	view()->share('categories', General::getCategoryTree());
    }
}
