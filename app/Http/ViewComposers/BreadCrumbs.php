<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 08.08.18
 * Time: 16:56
 */

namespace App\Http\ViewComposers;

use Illuminate\Contracts\Routing;
use Illuminate\Http\Request;

class BreadCrumbs
{
    protected $homeLink;
    protected $whereLink;
    protected $currentLink;

    public function getWhereLink(Request $request)
    {
        dd($request);
    }

//    public static function compose(View $view)
//    {
//        $view->with('breadcrumbs', $array);
//    }
}