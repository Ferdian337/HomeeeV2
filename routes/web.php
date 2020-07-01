<?php

use Illuminate\Support\Facades\Route;

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

////route pengelola////

route::get('/dashboard', 'dashboardController@index');

route::get('/TambahKamar', 'PengelolaController@TambahKamar');
route::post('/TambahKamar/store', 'PengelolaController@storeKamar');

route::get('/EditKamar', 'PengelolaController@EditKamar');
Route::get('/EditKamar/{id}','PengelolaController@edit');

route::get('/ReviewPengunjung', 'PengelolaController@ReviewPengunjung');

route::get('/EditDeskripsiUmum', 'PengelolaController@EditDeskripsiUmum');
route::post('/EditDeskripsiUmum/store', 'PengelolaController@storeDeskripsiUmum');

route::get('/DaftarPengunjungSebelum', 'PengelolaController@DaftarPengunjungSebelum');
route::get('/DaftarPengunjungSekarang', 'PengelolaController@DaftarPengunjungSekarang');
route::get('/DaftarPengunjungSesudah', 'PengelolaController@DaftarPengunjungSesudah');

////route pengelola////


////route login////

Auth::routes();
//setelah login penyewa
Route::get('/home', 'HomeController@index')->name('home');
//setelah login pengelola
Route::get('/dashboard', 'dashboardController@index')->name('dashboard');

////route login////