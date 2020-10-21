<?php

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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/admin', 'MainController@index');

Route::get('/tables', function () {
    return view('pages.table');
});
Route::get('/catalog', function () {
    return view('pages.catalog');
});
Route::get('/form', function () {
    return view('pages.form');
});

Route::group(['namespace' => 'Blog', 'prefix' => 'blog'], function() {
    Route::resource('posts', 'PostController');
});

$groupData = [
    'namespace' => 'Blog\Admin',
    'prefix' => 'admin/blog',
];

Route::group($groupData, function () {
    Route::resource('categories', 'CategoryController');
});

Route::get('/admin/{slug}', 'MainController@show');
