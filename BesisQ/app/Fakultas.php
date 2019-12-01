<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'fakultas';

    public function getFakultas()
    {
        if(empty($this->id)){
            return 'Bebas';
        }return $this->nama_fak;
    }
	public function prodi()
    {
    	return $this->hasMany('App\Prodi');
    }
	public function mahasiswa()
    {
    	return $this->hasMany('App\Mahasiswa');
    }    
	public function beasiswa()
    {
    	return $this->hasMany('App\Beasiswa');
    }    
}
