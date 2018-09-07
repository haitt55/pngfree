<?php

namespace App;

use App\Helpers\General;
use App\Image;

class Category extends BaseModel
{

    const GRAPHIC_DESIGN = 1;
    const TEMPLATES = 2;
    const ART_FONT = 3;
    const POWER_POINT = 4;
    const ICON = 5;
    const BACK_GROUND = 6;

    protected $table = 'categories';

    protected $fillable = [
        'slug', 'parent_id', 'name', 'level',
        'is_head_red', 'is_new', 'meta_description', 'meta_keywords',
        'meta_title'
    ];

    /**
     * get category and it's images for index page
     *
     * @return array
     */
    public static function getCategoriesAndImageForIndex()
    {
        $results = array();
        $categories = General::getCategoryTree();
        foreach ($categories as $category1) {
            self::getAllCategoryChildId($category1['id']);
            $results[$category1['id']]['category'] = $category1;
            list($results[$category1['id']]['images'], $results[$category1['id']]['totals']) = Image::getIndexImagesByCategory($category1['id']);
        }

        return $results;
    }

    /**
     * get all category child id and child id of child in a category
     *
     * @param $categoryId
     * @param int $level
     * @return array
     */
    public static function getAllCategoryChildId($categoryId, $level = 0) {
        $childIds = self::where('parent_id', $categoryId)->pluck('id')->toArray();
        $arrAllChildId = $childIds;
        if ($childIds && $level == 0) {
            $childIdOfChild = self::whereIn('parent_id', $childIds)->pluck('id')->toArray();
            if ($childIdOfChild) {
                $arrAllChildId = array_merge($childIds, $childIdOfChild);
            }
        }

        return $arrAllChildId;
    }

    /**
     * @param $categoryId
     * @param $level
     * @return array
     */
    public static function getAllImages($categoryId, $level)
    {
        $result = array();
        $arrChildId = self::getAllCategoryChildId($categoryId, $level);
        return $result;
    }

}
