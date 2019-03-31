<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

//Route::any('/dat', function () {
//    return view('list_dat');
//});
Route::post('boking/{id}','BokingController@store')->name('store');
Route::group(['middleware'=>'auth', 'prefix'=>'admin'], function ()
{
    Route::resource('categories', 'CateroryController');
    Route::resource('service', 'ServiceController');
    Route::resource('orders', 'OrderController');
});
Route::get('all_services','BokingController@all_services')->name('all_services');
Route::get('/category', 'CategoryController@index')->name('category');
Route::resource('events', 'EventController');
Route::any('orders', 'OrderController@Calendar')->name('Calendar');

Route::resource('boking','BokingController');
Route::post('find','FindController@show')->name('find');
