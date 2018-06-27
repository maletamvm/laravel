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

Route::get('home', 'HomeController@index')->name('home');
Route::get('logout','Auth\LoginController@logout');
Route::get('posts/create','PostController@createForm');
Route::get('main','PostController@show');
Route::get('/','PostController@show');
Route::get('posts/edit/{post}','PostController@editForm');
Route::delete('posts/{post}','PostController@delete');
Route::post('posts/edit/{id}','PostController@update');
//
//Route::get('/',function (){
//    $posts= \App\Posts::orderBy('created_at' ,'asc')->get();
//    return view('main' ,[
//        'posts' =>$posts
//    ]);
//});
Route::post('/posts/create','PostController@addPost');


//Route::delete('/{ posts}',function (\App\Task $posts){
//   $posts->delete();
//    return redirect('/');
//});
