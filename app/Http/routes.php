<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('/dosen/tambah','dosencontroller@tambah');
Route::get('/mahasiswa/tambah','mahasiswacontroller@tambah');
Route::get('/matakuliah/tambah','matakuliahcontroller@tambah');
Route::get('/jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');
Route::get('/dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');
Route::get('/ruangan/tambah','ruangancontroller@tambah');
Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "Hello Word dari pengguna $pengguna";
});
Route::get('/public', function () {
    return "Nama : Ridwan Kurniadi";
});