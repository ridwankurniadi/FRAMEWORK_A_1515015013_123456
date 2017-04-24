<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class Pengguna extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];
    public function dosen()
    {
    	return $this->hasOne(Dosen::class);
    }
    public function mahasiswa()
    {
    	return $this->hasOne(mahasiswa::class);
    }
    public function peran()
    {
    	return $this->belongsToMany(Peran::class);
    }    
}