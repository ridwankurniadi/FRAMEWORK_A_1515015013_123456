<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahcontroller extends Controller
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
	$matakuliah = new matakuliah();
	$matakuliah->tittle = 'Struktur data';
	$matakuliah->keterangan = 'Matakuliah Wajib';
	$matakuliah->save();
	return "data dengan matakuliah {$matakuliah->tittle} telah disimpan";
}//
}
