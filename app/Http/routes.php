<?php
use App\Http\Requests;

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


Route::get('/', function () {
    return view('welcome');
 });

// Route::get('/nama', function () {
//     return view('nama');
//  });

// Route::get('pengguna/{pengguna}',function($pengguna)
//  {
//   return "Hello Word dari pengguna $pengguna";
//  });
Route::auth();

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');

Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');
Route::get('mahasiswa/{mahasiswa}','MahasiswaController@lihat');

Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');
Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{Dosen}','DosenController@edit');
Route::post('dosen/edit/{Dosen}','DosenController@update');
Route::get('dosen/hapus/{Dosen}','DosenController@hapus');
Route::get('dosen/{Dosen}','MahasiswaController@lihat');

Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::post('dosen_matakuliah/simpan','Dosen_MatakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{Dosen_Matakuliah}','Dosen_MatakuliahController@edit');
Route::post('dosen_matakuliah/edit/{Dosen_Matakuliah}','Dosen_MatakuliahController@update');
Route::get('dosen_matakuliah/hapus/{Dosen_Matakuliah}','Dosen_MatakuliahController@hapus');
Route::get('dosen_matakuliah/lihat/{Dosen_Matakuliah}','Dosen_MatakuliahController@lihat');

Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');
Route::post('jadwal_matakuliah/simpan','Jadwal_MatakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{Jadwal_Matakuliah}','Jadwal_MatakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{Jadwal_Matakuliah}','Jadwal_MatakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{Jadwal_Matakuliah}','Jadwal_MatakuliahController@hapus');
Route::get('jadwal_matakuliah/lihat/{Jadwal_Matakuliah}','Jadwal_MatakuliahController@lihat');