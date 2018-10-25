<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class CategoryController extends AbstractFrontController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($categorySlug, Request $request)
    {
        $category       = Category::findBySlug($categorySlug);
        $images         = Image::getAllImagesByCategory($category->id, $category->level);
        $total          = Image::countByCategory($category->id, $category->level);
        $categoriesTags = Category::getCategoriesTags($category);
        $sort           = $request->get('sort');
        return view('front.categories.index')->with(array(
            'category'       => $category,
            'images'         => $images,
            'total'          => $total,
            'categoriesTags' => $categoriesTags,
            'sort'           => $sort,
        ));
    }
}
