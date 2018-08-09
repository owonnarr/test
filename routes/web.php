<?php

use GuzzleHttp\Psr7\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routes for frontend

Route::get('/', function () {
    return view('/frontend/layout');
});

// Маршруты для панели управления сайтом (admin)

Route::get('/admin', function () {
    return view('admin.layout-admin');
})->name('home.admin');

Route::get('admin/{categories}', 'admin\CategoryController@show')->name('admin.category');
//Route::get('admin/{rootName}', 'admin\CategoryController@getChildCats')->name('child');
Route::match( ['get', 'post'], 'admin/category/add', 'admin\CategoryController@add')->name('admin.category.add');
Route::post('admin/category/delete/{id}', 'admin\CategoryController@delete')->name('admin.categories.delete');
Route::match(['get', 'post'], 'admin/category/{id}/edit', 'admin\CategoryController@edit')->name('edit');





