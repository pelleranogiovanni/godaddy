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


Auth::routes();

Route::get('/', 'Web\PageController@blog')->name('blog');

Route::get('blog/{id}','Web\PageController@post')->name('post');

Route::get('category/{id}','Web\PageController@category')->name('category');

Route::get('tag/{id}','Web\PageController@tag')->name('tag');
Route::get('contacto','Web\PageController@contacto')->name('contacto');
Route::get('acerca','Web\PageController@acerca')->name('acerca');
Route::post('mail','Web\PageController@mail')->name('mail');

// Admin

Route::resource('tags','Admin\TagController');
Route::resource('categories','Admin\CategoryController');
Route::resource('posts','Admin\PostController');
Route::resource('images','Admin\ImageController');
Route::get('images/crear/{id}','Admin\ImageController@crear')->name('images.crear');
Route::resource('publicities','Admin\PublicitiesController');



Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('reset','Auth\LoginController@reset')->name('reset');
Route::get('perfil','UsersController@showProfile')->name('perfil');

Route::post('resetPass','Auth\LoginController@resetPass')->name('resetPass');
Route::get('resetPass','Auth\LoginController@login')->name('resetPass');