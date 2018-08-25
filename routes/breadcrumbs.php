<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 16.08.18
 * Time: 12:44
 */

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home.admin'));
});

Breadcrumbs::for('category', function ($trail) {
    $trail->parent('home');
    $trail->push(route('admin.category'));
});