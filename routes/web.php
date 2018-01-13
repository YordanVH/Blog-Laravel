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

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){


	Route::resource('users', 'UsersController');

	Route::resource('categories', 'CategoriesController');

	Route::resource('tags', 'TagsController');

	Route::resource('articles', 'ArticlesController');
});

Auth::routes();

Route::get('users/index', 'UsersController@index')->name('home');

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
