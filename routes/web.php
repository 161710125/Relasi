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
Route::resource('galeri','GaleriController');
Route::resource('mobil','MobilController');
Route::resource('customer','CustomerController');
Route::resource('supir','SupirController');
Route::resource('booked','BookingController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

