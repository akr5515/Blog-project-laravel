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

/*Route::get('/', function () {
    return view('test');
});*/

Auth::routes(['verify'=>true]);


Route::get('/', 'PostController@index')->middleware('verified');

Route::resource('/post', 'PostController');

Route::resource('categories', 'CategoryController', ['except'=>['create']]);
Route::resource('tags', 'TagController', ['except'=>['create']]);


Route::get('/home', 'HomeController@index')->name('home');

