<?php

namespace App\Helpers;

use App\Models\Category;
use App\Models\Image;
use DB;
use Illuminate\Support\Facades\Config;

class General
{

    const LEVEL1 = 0;
    const LEVEL2 = 1;
    const LEVEL3 = 2;

    /**
     * get category tree
     *
     * @return mixed
     */
    public static function getCategoryTree()
    {
        $categoriesLv1 = DB::table('categories')->where('level', self::LEVEL1)->get()->toArray();
        $categoriesLv2 = DB::table('categories')->where('level', self::LEVEL2)->get()->toArray();
        $categoriesLv3 = DB::table('categories')->where('level', self::LEVEL3)->get()->toArray();
        foreach ($categoriesLv1 as $key => $value) {
            $categoriesLv1[$key] = (array) $value;
        }
        foreach ($categoriesLv2 as $key => $value) {
            $categoriesLv2[$key] = (array) $value;
        }
        foreach ($categoriesLv3 as $key => $value) {
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

    /**
     * check category for special display
     *
     * @param $categoryName
     */
    public static function checkCategory($categoryName)
    {
        if (strpos(strtolower($categoryName), 'graphic') !== false) {
            return Category::GRAPHIC_DESIGN;
        } elseif (strpos(strtolower($categoryName), 'template') !== false) {
            return Category::TEMPLATES;
        } elseif (strpos(strtolower($categoryName), 'font') !== false) {
            return Category::ART_FONT;
        } elseif (strpos(strtolower($categoryName), 'powerpoint') !== false) {
            return Category::POWER_POINT;
        } elseif (strpos(strtolower($categoryName), 'icon') !== false) {
            return Category::ICON;
        } elseif (strpos(strtolower($categoryName), 'ground') !== false) {
            return Category::BACK_GROUND;
        } else {
            //
        }
        return 0;
    }

    public static function getDivClassIndex($categoryName)
    {
        $common = '-photobox';
        if (strpos(strtolower($categoryName), 'graphic') !== false) {
            return 'gd' . $common;
        } elseif (strpos(strtolower($categoryName), 'template') !== false) {
            return 'et' . $common;
        } elseif (strpos(strtolower($categoryName), 'font') !== false) {
            return 'gd' . $common;
        } elseif (strpos(strtolower($categoryName), 'powerpoint') !== false) {
            return 'ppt' . $common;
        } elseif (strpos(strtolower($categoryName), 'icon') !== false) {
            return 'gd' . $common;
        } elseif (strpos(strtolower($categoryName), 'ground') !== false) {
            return 'lb' . $common;
        } else {
            //
        }
        return '';
    }

    public static function getUlClassIndex($categoryName)
    {
        $common = '-photobox';
        if (strpos(strtolower($categoryName), 'graphic') !== false) {
            return 'gd' . $common;
        } elseif (strpos(strtolower($categoryName), 'template') !== false) {
            return 'et' . $common;
        } elseif (strpos(strtolower($categoryName), 'font') !== false) {
            return 'gd' . $common;
        } elseif (strpos(strtolower($categoryName), 'powerpoint') !== false) {
            return 'ppt' . $common;
        } elseif (strpos(strtolower($categoryName), 'icon') !== false) {
            return 'gd' . $common;
        } elseif (strpos(strtolower($categoryName), 'ground') !== false) {
            return 'lb' . $common;
        } else {
            //
        }
        return '';
    }

    public static function getPicBoxClass($categoryName)
    {
        if (strpos(strtolower($categoryName), 'graphic') !== false) {
            return 'mb-picbox';
        } elseif (strpos(strtolower($categoryName), 'template') !== false) {
            return 'mb-picbox';
        } elseif (strpos(strtolower($categoryName), 'font') !== false) {
            return 'mb-picbox';
        } elseif (strpos(strtolower($categoryName), 'powerpoint') !== false) {
            return 'gd';
        } elseif (strpos(strtolower($categoryName), 'icon') !== false) {
            return 'bacPng-box';
        } elseif (strpos(strtolower($categoryName), 'ground') !== false) {
            return 'bacPng-box';
        } else {
            //
        }
        return '';
    }

    public static function toCamelCase()
    {

    }

    public static function countAllImage()
    {
        $count = Image::all()->count();

        return $count;
    }

    public static function getShortLink($driveId)
    {
        if (!$driveId) {
            return null;
        }
        $googleView = Config::get('drive-img.google_view');
        $shortConfig = Config::get('drive-img.short_link_api');
        // replace id in google drive
        $driveLink = urlencode(preg_replace('/\{id\}/', $driveId, $googleView));

        // replace token, url in link short
        $shortLink = preg_replace('/\{token\}/', $shortConfig['token'], $shortConfig['url']);
        $shortLink = preg_replace('/\{org_url\}/', $driveLink, $shortLink);
        try {
            return @file_get_contents($shortLink);
        } catch (\Exception $ex) {
            \Log::error($ex);
            return null;
        }
    }
}
