<?php

namespace App\Http\Controllers\Front;

use App\Helpers\General;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends AbstractFrontController
{

    protected $categories;

    public function index()
    {
        $categoryWithImages     = Category::getCategoriesAndImageForIndex();
        $tagsWithNumberOfImages = Tag::getTagsWithNumberOfImages();
        return view('front.index')->with(array(
            'categoryWithImages'     => $categoryWithImages,
            'tagsWithNumberOfImages' => $tagsWithNumberOfImages,
        ));
    }

    public function search(Request $req)
    {
        $categories = General::getCategoryTree();
        $images = Image::search($req->query());
        return view('front.search', compact('images', 'categories'));
    }

    public function loginCheck()
    {
        if (Auth::guard('web')->user()) {
            return response()->json(array('login' => 1));
        }

        return response()->json(array('login' => 0));
    }
}
