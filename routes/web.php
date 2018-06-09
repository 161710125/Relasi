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
Auth::routes();
Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']], function(){
Route::get('/', 'GaleriController@index')->name('index');
Route::resource('galeri','GaleriController');
Route::resource('mobil','MobilController');
Route::resource('customer','CustomerController');
Route::resource('supir','SupirController');

});

Route::group(['prefix'=>'member','middleware'=>['auth','role:member']], function(){
Route::resource('booking','BookingController');
});
