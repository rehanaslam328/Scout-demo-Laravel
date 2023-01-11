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

Route::get('/post','PostController@create');
Route::post('/post/save','PostController@store');
Route::get('/search','PostController@search');
Route::get('/view-pdf/{id}','PostController@viewpdf');
Route::get('/view','PostController@view');