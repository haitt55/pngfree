<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
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
        $tagsWithNumberOfImages = Tag::getTagsWithNumberOfImages();
        return view('index')->with(array(
            'categoryWithImages' => $categoryWithImages,
            'tagsWithNumberOfImages' => $tagsWithNumberOfImages
        ));
    }

    public function loginCheck()
    {
        if (Auth::guard('web')->user()) {
            return response()->json(array('login' => 1));
        }

        return response()->json(array('login' => 0));
    }

}