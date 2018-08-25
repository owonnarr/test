<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.sidebar', 'App\Http\ViewComposers\AdminMenuComposer');
//        view()->composer('admin.breadcrumbs.breadcrumbs', 'App\Http\ViewComposers\BreadCrumbsComposer');
//        view()->composer('admin.category.create-modal', 'App\Http\ViewComposers\CategoryComposer');
//        view()->composer('admin.sidebar', 'App\Http\ViewComposers\CategoryComposer');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}