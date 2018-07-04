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

Route::get('/post', 'PostsController@index');

Route::get('/post/create', 'PostsController@create');
Route::post('/post', 'PostsController@store');
Route::get('/post/{post}', 'PostsController@show');

Route::resource('/admin/posts', 'Admin\PostController');

Route::get('/register', 'RegisterController@create');
Route::post('register', 'RegisterController@store');

Route::get('/login', 'LoginController@getLogin');
Route::post('/login', 'LoginController@postLogin');

Route::get('/logout', 'Auth\LoginController@logout');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::post('/post/{post}/comments', 'CommentsController@store');
Route::get('/faq', function(){
  return view('/faq');
});

Route::get('/user/{user}', 'UserController@show');
Route::get('/profile/actualizar/{id}', 'Usercontroller@edit');
Route::post('/profile/actualizar/{id}', 'UserController@update');
