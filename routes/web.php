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
Route::get('/login','AuthController@index')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/produk','ProdukController@index');
	Route::post('/produk/create','ProdukController@create');
	Route::get('/produk/{id}/edit','ProdukController@edit');
	Route::post('/produk/{id}/update','ProdukController@update');
	Route::get('/produk/{id}/delete','ProdukController@delete');
	Route::get('/dashboard','DashboardController@index');
	Route::get('/kategori','KategoriController@index');
	Route::post('/kategori/create','KategoriController@create');
	Route::get('/kategori/{id}/edit','KategoriController@edit');
	Route::post('/kategori/{id}/update','KategoriController@update');
	Route::get('/kategori/{id}/delete','KategoriController@delete');
	Route::get('/stok','StokController@index');
	Route::post('/stok/create','StokController@create');
	Route::get('/stok/{id}/edit','StokController@edit');
	Route::post('/stok/{id}/update','StokController@update');
	Route::get('/stok/{id}/delete','StokController@delete');
});

Route::get('/transaksi','TransaksiController@index');
Route::get('/transaksi/create','TransaksiController@create');
Route::get('/transaksi/tambah','TransaksiController@tambah');

