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

// Route::resource('admin/pemasok', 'CpemasokController');
// ROUTER ADMIN KE DETAIL PEMASOK

Route::get('/admin', function () {
    return view('admin.main');
});
Route::get('/admin/createpemasok', 'CpemasokController@create');
Route::get('/admin/datapemasok', 'CpemasokController@index');
Route::post('/admin/datapemasok', 'CpemasokController@store');
Route::get('/admin/datapemasok/{id}', 'CpemasokController@show');
Route::delete('/admin/datapemasok/{id}', 'CpemasokController@destroy');


Route::resource('album', 'AlbumController');
Route::get('/admin/dataalbum', 'AlbumController@index2');
Route::get('/admin/dataalbum/{id}', 'AlbumController@show2');


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

Route::get('/address', function () {
    return view('Mentahan.address');
});

// Route::get('/login/pemasok', 'Auth\LoginController@showPemasokLoginForm');
// Route::post('/login/pemasok', 'Auth\LoginController@pemasokLogin');
// Route::view('/home/pemasok', 'pemasok');
// Route::view('/home', 'home')->middleware('auth');
