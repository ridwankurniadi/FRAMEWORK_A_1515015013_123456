<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruangancontroller extends Controller
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
	$ruangan = new ruangan();
	$ruangan->tittle = '405';
	$ruangan->save();
	return "data dengan ruangan {$ruangan->ruangan} telah disimpan";
}
}
