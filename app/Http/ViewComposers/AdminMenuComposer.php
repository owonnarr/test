<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 20.08.18
 * Time: 14:02
 */

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class AdminMenuComposer
{
    protected $menu;

    public function __construct()
    {
        $this->menu = config('menu.menu');
    }

    public function compose(View $view)
    {
        $view->with('menu', $this->menu);
    }
}