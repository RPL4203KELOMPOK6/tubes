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
    return view('index');
});

Route::get('/coba', function () {
    return view('home.coba');
});

Route::resource('pemasok', 'PemasokController');
Route::resource('album', 'AlbumController');
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', function () {
    return view('Mentahan.profile');
});

Route::get('/cart', function () {
    return view('Mentahan.cart');
});

Route::get('/pesanan', function () {
    return view('Mentahan.pesanan');
});

Route::get('/transaksi', function () {
    return view('Mentahan.transaksi');
});