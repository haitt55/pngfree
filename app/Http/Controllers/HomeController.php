<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Image;
use App\Helpers\General;

class HomeController extends Controller
{

    protected $categories;

    public function __construct()
    {
        $this->categories = General::getCategoryTree();
    }

	public function index()
    {
        $categoryWithImages = Category::getCategoriesAndImageForIndex();
        return view('index')->with(array(
            'categoryWithImages' => $categoryWithImages
        ));
    }

}