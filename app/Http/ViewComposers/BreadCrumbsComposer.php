<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 08.08.18
 * Time: 16:56
 */

namespace App\Http\ViewComposers;

use App\Helpers\BreadCrumbs;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BreadCrumbsComposer
{
    protected $request;

    public function __construct(Request $request)
    {
        return $this->request = $request;
    }

    public function compose(View $view)
    {
        $view->with('admin.breadcrumbs.breadcrumbs', BreadCrumbs::getCurrentCrumb($this->request));
    }
}