<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 11.07.18
 * Time: 12:45
 */

namespace App\Http\ViewComposers;

use App\Admin;
use App\Category;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Route;
use Request;


class CategoryComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public static function compose(View $view)
    {
//        $aChildCats = new CategoryController();
//        $child = $aChildCats->getChildCats();

        $view->with('cats', Admin::getAdminCategories());
        $view->with('icon', Admin::getIcon());
//        $view->with('childs', $child);

    }

}