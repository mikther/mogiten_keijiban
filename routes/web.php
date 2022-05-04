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

Route::get('/Club','AppController@index');
Route::get('/School','AppController@index');
Route::get('/User','AppController@index');
Route::get('/Shop','AppController@index');

Route::get('/', 'AppController@index');

Route::get('/posts/{post}', 'AppController@show');
//投稿
Route::post('/posts', 'AppController@create');
Route::get('/posts/create', 'AppController@create');
//編集
Route::get('/posts/{post}/edit', 'AppController@edit');
Route::put('/posts/{post}', 'AppController@update');