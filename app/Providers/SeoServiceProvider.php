<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 02.04.18
 * Time: 20:14
 */

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    public function boot(Request $request)
    {
        $sCurrentNamePage = $request->path();
//        dd($sCurrentPage);

    }
}