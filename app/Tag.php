<?php

namespace App;

use App\Helpers\General;
use App\Image;

class Tag extends BaseModel
{
    protected $table = 'tags';

    protected $fillable = [
        'slug', 'name', 'meta_description', 'meta_keywords',
        'meta_title'
    ];
}
