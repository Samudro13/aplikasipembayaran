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

Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/barang', 'BarangController@index')->name('daftarBarang');
    Route::get('/barang/create', 'BarangController@create')->name('createBarang');
    Route::post('/barang/create', 'BarangController@store')->name('storeBarang');
    Route::get('/barang/{barang}/edit', 'BarangController@edit')->name('editBarang');
    Route::post('/barang/{barang}/edit', 'BarangController@update')->name('updateBarang');
    Route::get('/barang/{barang}/delete', 'BarangController@destroy')->name('deleteBarang');

    Route::get('/pelanggan', 'PelangganController@index')->name('daftarPelanggan');
    Route::get('/pelanggan/create', 'PelangganController@create')->name('createPelanggan');
    Route::post('/pelanggan/create', 'PelangganController@store')->name('storePelanggan');
    Route::get('/pelanggan/{pelanggan}/edit', 'PelangganController@edit')->name('editPelanggan');
    Route::post('/pelanggan/{pelanggan}/edit', 'PelangganController@update')->name('updatePelanggan');
    Route::get('/pelanggan/{pelanggan}/delete', 'PelangganController@destroy')->name('deletePelanggan');

    Route::get('/transaksi', 'TransaksiController@index')->name('daftarTransaksi');
    Route::get('/transaksi/create', 'TransaksiController@create')->name('createTransaksi');
    Route::post('/transaksi/create', 'TransaksiController@store')->name('storeTransaksi');
    Route::get('/transaksi/{transaksi}/edit', 'TransaksiController@edit')->name('editTransaksi');
    Route::post('/transaksi/{transaksi}/edit', 'TransaksiController@update')->name('updateTransaksi');
    Route::get('/transaksi/{transaksi}/delete', 'TransaksiController@destroy')->name('deleteTransaksi');
});
