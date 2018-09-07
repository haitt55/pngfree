<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use Illuminate\Http\Request;
use App\Helpers\General;

class CategoryController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index($categorySlug)
    {
        // TODO paginate
        $category = Category::findBySlug($categorySlug);
        $images = Image::getAllImagesByCategory($category->id, $category->level);
        return view('categories.index')->with(array(
            'images' => $images
        ));
    }
}
