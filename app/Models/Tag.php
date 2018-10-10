<?php

namespace App\Models;

use App\Helpers\General;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

class Tag extends BaseModel
{
    protected $table = 'tags';

    protected $fillable = [
        'slug', 'name', 'meta_description', 'meta_keywords',
        'meta_title'
    ];

    public static function getTagsWithNumberOfImages()
    {
        $tagIds = array(10,20,30,40,50);
        $tags = self::select('*')->whereIn('id', $tagIds)->get()->toArray();
        foreach ($tags as $k => $v) {
            $tags[$k]['total'] = Image::where('tag_id', 'like', '%'.$v['id'].'%')->count();
        }

        return $tags;
    }
}
