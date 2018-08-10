<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 10.08.18
 * Time: 15:21
 */

namespace App\Helpers;

use App\Admin;
use App\Category;

class BaseHelper
{
    public static function getNameCatAdminFromRedirect(int $id)
    {
        $oRootCat = Admin::where('id', $id)->first();
        $sRootCatName = $oRootCat->url;

        if ($sRootCatName) {
            return $sRootCatName;
        } else {
            return false;
        }
    }


    public static function getAdminIdCategory(int $id)
    {
        $oCategory = Category::where('id', $id)->first();

        if ($oCategory) {
            return $oCategory;
        } else {
            return false;
        }
    }
}