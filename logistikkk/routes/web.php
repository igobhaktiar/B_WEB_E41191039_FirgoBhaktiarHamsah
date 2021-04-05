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
//url, controller, method
Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace' => 'Frontend'], function(){
    Route::resource('home','HomeController');
});

Route::group(['namespace' => 'Backend'], function(){
    Route::resource('dashboard','DashboardController');
});

// Route::group(['namespace' => 'Backend'], function(){
//     Route::resource('kategori','DashboardController');
// });
// Route::get('/kategori','DashboardController@kategori');
Route::get('/kategori', function () {
    return view('backend.kategori');
});
Route::get('/barang', function () {
    return view('backend.barang');
});
Route::get('/kurir', function () {
    return view('backend.kurir');
});
Route::get('/pelanggan', function () {
    return view('backend.pelanggan');
});
Route::get('/user', function () {
    return view('backend.user');
});
Route::get('/data_pengiriman', function () {
    return view('backend.data_pengiriman');
});
Route::get('/tambah_kategori', function () {
    return view('backend.tambah_kategori');
});