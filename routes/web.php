<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/siswa', function () {
    return "<h1>Route Siswa</h1>";
});

Route::get('/siswa/{id}', function ($id) {
    return "<h1>Route Siswa Dengan ID $id</h1>";
    
})->where('id', '[0-9]+');

Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
    return "<h1>Route Siswa Degan ID $id dan Nama $nama</h1>";
})->where(['id' => '[0-9]+', 'nama' => '[A-Za-z]+']);

Route::get('siswac', [SiswaController::class, 'index']);
Route::get('siswac/{id}', [SiswaController::class, 'detail'])->where('id', '[0-9]+');
Route::get('siswac/{id}/{nama}', [SiswaController::class, 'info'])->where(['id' => '[0-9]+', 'nama' => '[A-Za-z]+']);

//halaman
Route::get('/', [HalamanController::class, 'index']);
Route::get('/tentang', [HalamanController::class, 'tentang']);
Route::get('/kontak', [HalamanController::class, 'kontak']);