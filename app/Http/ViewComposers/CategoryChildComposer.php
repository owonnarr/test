<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 30.07.18
 * Time: 12:13
 */

namespace App\Http\ViewComposers;

use App\Http\Controllers\admin\CategoryController;
use Illuminate\Contracts\View\View;


class CategoryChildComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public static function compose(View $view)
    {
        $aChildCats = new CategoryController();
        $child = $aChildCats->getChildCats();

        $view->with('aData', $child);
    }
}