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

//Untuk Pengelola
route::get('/dashboard', 'dashboardController@index');
route::get('/TambahKamar', 'PengelolaController@TambahKamar');
route::get('/EditKamar', 'PengelolaController@EditKamar');
route::get('/ReviewPengunjung', 'PengelolaController@ReviewPengunjung');
route::get('/EditDeskripsiUmum', 'PengelolaController@EditDeskripsiUmum');
route::get('/DaftarPengunjungSebelum', 'PengelolaController@DaftarPengunjungSebelum');
route::get('/DaftarPengunjungSekarang', 'PengelolaController@DaftarPengunjungSekarang');
route::get('/DaftarPengunjungSesudah', 'PengelolaController@DaftarPengunjungSesudah');
