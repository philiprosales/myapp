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

/*
Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is users '.$name.' with an id of '.$id;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
<<<<<<< HEAD
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
=======
Route::get('/services', 'PagesController@services');
>>>>>>> 2f8b188723b26d9cfb58986548b30b8a884dbc23
