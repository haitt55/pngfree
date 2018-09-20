<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use Illuminate\Http\Request;
use App\Helpers\General;

class ImageController extends Controller
{
    public function __construct()
    {
        //
    }

    public function detail($categoryPrefix, $imageSlug)
    {
        $image = Image::findBySlug($imageSlug);
        $moreImages = Image::getAllImagesByCategory($image->category_id);
        return view('images.detail')->with(array(
            'image' => $image,
            'moreImages' => $moreImages
        ));
    }
}
