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
Route::get('/','CostumerController@welcome')->name('welcome');

Route::middleware('auth')->group(function(){
	Route::get('/post','PostController@index')->name('post.index');
	Route::get('/post/create','PostController@create')->name('post.create');
	Route::post('/post/create','PostController@store')->name('post.store');
	Route::get('/post/{post}/edit','PostController@edit')->name('post.edit');
	Route::patch('/post/{post}/edit','PostController@update')->name('post.update');
	Route::delete('/post/{post}/delete','PostController@destroy')->name('post.destroy');
	
});

Route::Auth();
Route::get('/costumer','CostumerController@create')->name('costumer.create');
Route::post('/costumer','CostumerController@store')->name('costumer.store');



Route::middleware('auth')->group(function(){
	Route::get('/admin','CostumerController@index')->name('costumer.index');
	Route::get('/admin/{costumer}/edit','CostumerController@edit')->name('costumer.edit');
	Route::patch('/admin/{costumer}/edit','CostumerController@update')->name('costumer.update');
	Route::get('/admin/rutes/create','CostumerController@rutebikin')->name('costumer.rutebikin');
	Route::post('/admin/rutes/create','CostumerController@rutesetor')->name('costumer.rutesetor');

	Route::get('/booking/pesawat','BookingController@caripesawat')->name('booking.caripesawat');

});
Route::delete('/admin/{costumer}/delete','CostumerController@destroy')->name('costumer.destroy');

Route::get('/post/{post}','PostController@show')->where('slug' ,'[\w\d\-\_]+')->name('post.show');
