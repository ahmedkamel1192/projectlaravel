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


Route::get('/posts','Postscontroller@index')->Middleware('auth');
Route::get('/posts/create','Postscontroller@create')->Middleware('auth');
Route::post('/posts','Postscontroller@store')->Middleware('auth');
Route::get('/posts/{id}','Postscontroller@show')->Middleware('auth');
Route::get('/posts/{id}/edit','Postscontroller@edit')->Middleware('auth');
Route::post('/update/{post}','Postscontroller@update')->Middleware('auth');
Route::DELETE('/delete/{id}','Postscontroller@destroy')->Middleware('auth');
Route::get('login/{provider}','Auth\SocialAccountController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\SocialAccountController@handleProviderCallback');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
