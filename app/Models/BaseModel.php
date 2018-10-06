<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\General;

class BaseModel extends Model
{
	protected $regexField = 'slug';

	/**
	 * find regex
	 * @param  Query $query
	 * @param  string $input
	 * @return Query
	 */
	public function scopeFindRegex($query, $input)
    {
        return $query->where($this->regexField, 'REGEXP', str_slug($input));
    }

    public static function findBySlug($slug)
    {
        $model = self::where('slug', $slug)->first();

        if (!$model) {
            abort('404');
        }

        return $model;
    }
}