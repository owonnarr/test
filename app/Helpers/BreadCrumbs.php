<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 16.08.18
 * Time: 11:13
 */

namespace App\Helpers;

use Illuminate\Contracts\Routing;
use Illuminate\Http\Request;

class BreadCrumbs
{
    protected $currentCrumb;
    protected $prevCrumb;

    public function __construct(Request $request)
    {

    }

    public static function getCurrentCrumb()
    {

    }


    public function getPrevCrumb()
    {

    }

    public function getBreadCrumbs()
    {

    }
}