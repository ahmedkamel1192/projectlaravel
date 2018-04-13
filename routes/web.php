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


Route::get('/posts','Postscontroller@index');
Route::get('/posts/create','Postscontroller@create');
Route::post('/posts','Postscontroller@store');
Route::get('/posts/{id}','Postscontroller@show');
Route::get('/posts/{id}/edit','Postscontroller@edit');
Route::post('/update/{id}','Postscontroller@update');
Route::get('/delete/{id}','Postscontroller@destroy');






