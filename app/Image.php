<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'slug', 'title', 'description', 'thumb',
        'png_link', 'psd_link', 'ai_link', 'jpg_link',
        'eps_link', 'ppt_link', 'svg_link', 'tag_id', 'meta_description', 'meta_keywords',
        'meta_title', 'category_id', 'album'
    ];
}
