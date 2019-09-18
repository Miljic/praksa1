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

Route::get('/users', 'UsersController@index');

Route::post('/register', 'RegisterController@store');
Route::get('/register', 'RegisterController@index');
Route::get('/edit/{id}', 'UsersController@edit');
Route::post('/update/{id}', 'UsersController@update')->name('updateuser');
Route::get('/delete/{id}', 'UsersController@delete');

Route::get('/posts', 'PostController@index');
Route::get('/createPost', 'PostController@store');
Route::post('/createPost', 'PostController@store');
Route::get('/edit/{id}', 'PostController@edit');
Route::post('/update{id}', 'PostController@update')->name('updatepost');
Route::get('delete/{id}', 'PostController@delete');
Route::get('/posts/{id}/like', 'PostController@like');

