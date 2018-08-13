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
    /**
     * получаем название категории для обратного редиректа
     * @param int $id
     * @return bool
     */
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

    /**
     * получаем объект текущей категории
     * @param int $id
     * @return bool
     */
    public static function getObjCurentAdminCategory(int $id)
    {
        $oCategory = Category::where('id', $id)->first();

        if ($oCategory) {
            return $oCategory;
        } else {
            return false;
        }
    }
}