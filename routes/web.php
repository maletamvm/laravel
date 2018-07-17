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
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('log','Auth\LoginController@logout')->name('logout');


Route::get('post/create','Dashboard\PostController@create')->name('post.create');

Route::get('/','Blog\PostController@index')->name('home');

Route::get('post/edit/{id}','Dashboard\PostController@edit')->name('post.edit');
Route::post('post/edit/{id}','Dashboard\PostController@update')->name('post.update');

Route::delete('post/delete/{post}','Dashboard\PostController@delete')->name('post.delete');

Route::post('/post/store','Dashboard\PostController@store')->name('post.store');


