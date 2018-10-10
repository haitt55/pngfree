<?php

namespace App\Http\Controllers;

use App\Models\Image;

class ImageController extends Controller
{
    public function __construct()
    {
        //
    }

    public function detail($categoryPrefix, $imageSlug)
    {
        $image      = Image::findBySlug($imageSlug);
        $moreImages = Image::getAllImagesByCategory($image->category_id);
        return view('images.detail')->with(array(
            'image'      => $image,
            'moreImages' => $moreImages,
        ));
    }
}
