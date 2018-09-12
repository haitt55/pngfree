<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Image;
use Illuminate\Http\Request;
use App\Helpers\General;

class TagController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index($categorySlug, Request $request)
    {
        $tag = Tag::findBySlug($categorySlug);
        $images = Image::getAllImagesByTag($tag->id);
        $total = Image::countByTag($tag->id);
        $categoriesTags = General::getCategoryTree();
        $sort = $request->get('sort');
        $category = $request->get('category');
        return view('tags.index')->with(array(
            'tag' => $tag,
            'images' => $images,
            'total' => $total,
            'categoriesTags' => $categoriesTags,
            'sort' => $sort,
            'category' => $category
        ));
    }
}
