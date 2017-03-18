<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
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
	$dosen = new dosen();
	$dosen->nama = 'Ridwan Kurniadi';
	$dosen->nip = '114524051997';
	$dosen->alamat ='Jl.Sentosa';
	$dosen->pengguna_id=1;
	$dosen->save();
	return "data dengan nama {$dosen->nama} telah disimpan";
}
}
