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

Route::get('/', 'PagesControllers@index');

Route::get('/about','PagesControllers@about');

Route::get('/services', 'PagesControllers@services');

Route::resource('posts','PostsController');

Route::get('/posts/edit/{id}','PostsController@edit');
Route::post('/posts/edit/{id}','PostsController@update');


Route::get('login', array('uses' => 'LoginController@showLogin'));

Route::post('login', array('uses' => 'LoginController@doLogin'));

Route::get('logout', array('uses' => 'LoginController@doLogout'));