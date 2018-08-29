<?php

namespace App\Helpers;

use DB;

class General
{

    const LEVEL1 = 0;
    const LEVEL2 = 1;
    const LEVEL3 = 2;

    public static function getCategoryTree() {
        $categoriesLv1 = DB::table('categories')->where('level', self::LEVEL1)->get()->toArray();
        $categoriesLv2 = DB::table('categories')->where('level', self::LEVEL2)->get()->toArray();
        $categoriesLv3 = DB::table('categories')->where('level', self::LEVEL3)->get()->toArray();
        foreach($categoriesLv1 as $key => $value) {
            $categoriesLv1[$key] = (array) $value;
        }
        foreach($categoriesLv2 as $key => $value) {
            $categoriesLv2[$key] = (array) $value;
        }
        foreach($categoriesLv3 as $key => $value) {
            $categoriesLv3[$key] = (array) $value;
        }

        $arrParentLv1 = array();
        $arrParentLv2 = array();
        foreach ($categoriesLv3 as $category) {
            if (!isset($arrParentLv2[$category['parent_id']])) {
                $arrParentLv2[$category['parent_id']] = array();
            }
            $arrParentLv2[$category['parent_id']][] = $category;
        }

        foreach ($categoriesLv2 as $key => $value) {
            if (!isset($categoriesLv2[$key]['childs'])) {
                $categoriesLv2[$key]['childs'] = array();
            }
            if (isset($arrParentLv2[$value['id']])) {
                $categoriesLv2[$key]['childs'] = $arrParentLv2[$value['id']];
            }
        }

        foreach ($categoriesLv2 as $category) {
            if (!isset($arrParentLv1[$category['parent_id']])) {
                $arrParentLv1[$category['parent_id']] = array();
            }
            $arrParentLv1[$category['parent_id']][] = $category;
        }

        foreach ($categoriesLv1 as $key => $value) {
            if (!isset($categoriesLv1[$key]['childs'])) {
                $categoriesLv1[$key]['childs'] = array();
            }
            if (isset($arrParentLv1[$value['id']])) {
                $categoriesLv1[$key]['childs'] = $arrParentLv1[$value['id']];
            }
        }

        return $categoriesLv1;
    }
}