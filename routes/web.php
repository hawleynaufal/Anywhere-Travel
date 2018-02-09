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
Route::middleware('auth')->group(function(){
Route::get('/costumer','CostumerController@create')->name('costumer.create');
Route::post('/costumer','CostumerController@store')->name('costumer.store');


Route::get('/booking/pesawat','BookingController@caripesawat')->name('booking.caripesawat');
Route::get('/booking/{rute}','BookingController@detailrute')->name('booking.detailrute');
Route::get('/booking/{id}/isidata','BookingController@createcus')->name('booking.createcus');
Route::post('/booking/{id}/isidata','BookingController@storecus')->name('booking.storecus');
Route::get('/booking/{id}/seat','BookingController@seat')->name('booking.seat');
Route::get('/booking/{rute}/reservation','BookingController@reservation')->name('booking.reservation');
});


Route::middleware('admin')->group(function(){
	Route::get('/admin','CostumerController@index')->name('costumer.index');
	//COSTUMER
	Route::get('/admin/costumer','CostumerController@index')->name('admin.costumer');
	Route::get('/admin/{costumer}/edit','CostumerController@edit')->name('costumer.edit');
	Route::patch('/admin/{costumer}/edit','CostumerController@update')->name('costumer.update');
	Route::delete('/admin/{costumer}/delete','CostumerController@destroy')->name('costumer.destroy');

	//RUTES
	Route::get('/admin/rutes','CostumerController@rutetampil')->name('admin.rutetampil');
	Route::get('/admin/rutes/create','CostumerController@rutebikin')->name('admin.rutebikin');
	Route::post('/admin/rutes/create','CostumerController@rutesetor')->name('admin.rutesetor');
	Route::get('/admin/{rute}/edit','CostumerController@ruteedit')->name('admin.ruteedit');
	Route::patch('/admin/{rute}/edit','CostumerController@ruteupdate')->name('admin.ruteupdate');
	Route::delete('/admin/{rute}/delete','CostumerController@rutedestroy')->name('admin.rutedestroy');

	//RESERVATION
	Route::get('/admin/reservation', 'CostumerController@reservationtampil')->name('admin.reservation');

	

});


Route::get('/post/{post}','PostController@show')->where('slug' ,'[\w\d\-\_]+')->name('post.show');
