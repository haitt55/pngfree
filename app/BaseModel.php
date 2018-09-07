<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\General;

class BaseModel extends Model
{

    public static function findBySlug($slug)
    {
        $model = self::where('slug', $slug)->first();

        if (!$model) {
            abort('404');
        }

        return $model;
    }
}