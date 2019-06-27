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

Route::get('/', 'AlbumController@index');
Route::get('/album/create', 'AlbumController@create');
Route::get('/album/{id}', 'AlbumController@show');
Route::post('/album/store', 'AlbumController@store');

Route::get('/photo/create/{album_id}', 'PhotoController@create');
Route::post('/photo/store', 'PhotoController@store');
Route::get('/photo/{id}', 'PhotoController@show');
Route::delete('/photo/{id}', 'PhotoController@destroy');
