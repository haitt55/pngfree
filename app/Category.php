<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'slug', 'parent_id', 'name', 'level',
        'is_head_red', 'is_new', 'meta_description', 'meta_keywords',
        'meta_title'
    ];
}
