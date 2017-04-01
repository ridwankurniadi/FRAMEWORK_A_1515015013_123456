<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
	protected $table ='pengguna';
	protected $fillable = ['username','password'];

	public function mahasiswa()
	{
		return $this->hasOne(mahasiswa::class);
	}

	public function dosen()
	{
		return $this_>hasOne(dosen::class);
	}
	public function peran()
	{
		return $this_->belongToMany(peran::class);
	}
}
