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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/index', 'homepage\HomepageController@index')->name('homepage');
Route::get('/tiket', 'tiketController@index')->name('tiket');
Route::get('/tiket/tambah','tiketController@indexx');
Route::get('/tiket/{id}','tiketController@destroy');
Route::get('tiket/edit/{id}','tiketController@edit');
Route::post('tiket/edit/tiket/update/{id}','tiketController@update');
Route::post('/tiket/tambah/simpan','tiketController@store');

//Route untuk qrcode
Route::get('/qrcode','qrCodeController@index')->name('qrcode');
