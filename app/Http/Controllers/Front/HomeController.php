<?php

namespace App\Http\Controllers\Front;

use App\Helpers\General;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Image;
use Illuminate\Http\Request;

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
        return Image::search($req->query());
    }
}
