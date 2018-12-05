<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use App\Models\Image;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends AbstractFrontController
{

    protected $categories;
    protected $parentCategories;

    public function index()
    {
        $categoryWithImages     = Category::getCategoriesAndImageForIndex();
        $tagsWithNumberOfImages = Tag::getTagsWithNumberOfImages();
        $updatedToday = Image::getUpdatedToday();
        return view('front.index')->with(array(
            'categoryWithImages'     => $categoryWithImages,
            'tagsWithNumberOfImages' => $tagsWithNumberOfImages,
            'updatedToday' => $updatedToday
        ));
    }

    public function search(Request $req)
    {
        $images  = Image::search($req->query());
        $keyword = $req->keyword;
        if ($categorySelectedId = $req->get('category')) {
            $categorySelected = Category::selectRaw('id, name')->find($categorySelectedId);
        }
        return view('front.search', compact('images', 'categories', 'categorySelectedId', 'categorySelected', 'keyword'));
    }

    public function loginCheck()
    {
        if (Auth::guard('web')->user()) {
            if (!Auth::guard('web')->user()->is_active) {
                return response()->json(array('is_active' => 0));
            }
            return response()->json(array('login' => 1));
        }

        return response()->json(array('login' => 0));
    }
}
