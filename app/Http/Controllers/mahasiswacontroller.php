<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
     public function awal()
{
	return "Hello dari PenggunaController";
}
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$mahasiswa = new mahasiswa();
	$mahasiswa->nama = 'Ridwan_ongisnade';
	$mahasiswa->nim = '1515015013';
	$mahasiswa->alamat = 'Jl.Sentosa';
	$mahasiswa->pengguna_id = '1';
	$mahasiswa->save();
	return "data dengan mahasiswa {$mahasiswa->nama} telah disimpan";
}//
}
