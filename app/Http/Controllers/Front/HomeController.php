<?php

namespace App\Http\Controllers\Front;

use App\Helpers\General;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends AbstractFrontController
{

    protected $categories;

    public function __construct()
    {
        $this->categories = General::getCategoryTree();
    }

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

    }
}
