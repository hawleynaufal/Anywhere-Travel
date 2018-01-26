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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','PostController@welcome')->name('welcome');

Route::middleware('auth')->group(function(){
	Route::get('/post','PostController@index')->name('post.index');
	Route::get('/post/create','PostController@create')->name('post.create');
	Route::post('/post/create','PostController@store')->name('post.store');
	Route::get('/post/{post}/edit','PostController@edit')->name('post.edit');
	Route::patch('/post/{post}/edit','PostController@update')->name('post.update');
	Route::delete('/post/{post}/delete','PostController@destroy')->name('post.destroy');
	
});

Route::Auth();


Route::get('/booking/isidata','CostumerController@create')->name('costumer.create');
Route::post('/booking/isidata','CostumerController@store')->name('costumer.store');

Route::get('/admin','CostumerController@index')->name('costumer.index');
Route::get('/admin/{post}/edit','CostumerController@edit')->name('costumer.edit');
Route::patch('/admin/{post}/edit','CostumerController@update')->name('costumer.update');
Route::delete('/admin/{post}/delete','PostController@destroy')->name('costumer.destroy');


Route::get('/post/{post}','PostController@show')->where('slug' ,'[\w\d\-\_]+')->name('post.show');
