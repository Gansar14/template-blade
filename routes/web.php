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
Route::get('/data', function () {
    return view('data');
});

Route::get('/master', function(){
    return view('master');
});

Route::get('/data-tables', function(){
    return view('datatabel');
});
// Route::get('/posts/create','PostController@create');
// Route::post('/posts','PostController@store');
// Route::get('/posts','PostController@index');
// Route::get('/posts/{id}','PostController@show');
// Route::get('/posts/{id}/edit','PostController@edit');
// Route::put('/posts/{id}','PostController@update');
// Route::delete('/posts/{id}','PostController@destroy');

Route::resource('posts', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
