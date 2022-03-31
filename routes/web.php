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
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('blog/create', 'Admin\BlogController@add');
    Route::get('blog/today/trend', 'Admin\BlogController@trend');
    Route::get('blog/today/update', 'Admin\BlogController@update');
    Route::get('blog/today/search', 'Admin\BlogController@search');
    Route::get('blog', 'Admin\BlogController@index');
    Route::get('blog/today/information/feed', 'Admin\BlogController@feed');
    Route::post('blog/create', 'Admin\BlogController@create');
    Route::get('blog/edit', 'Admin\BlogController@edit');
    Route::post('blog/edit', 'Admin\BlogController@update2');
    Route::get('blog/delete', 'Admin\BlogController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'BlogController@index');

//
// Route::get('/home', 'HomeController@index')->name('home');
