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

        if ($oRootCat !== null) {
            $sRootCatName = $oRootCat->url;
        }

        if (isset($sRootCatName)) {
            return $sRootCatName;
        } else {
            return false;
        }
    }
}