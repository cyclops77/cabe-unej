<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['id','user_id','fakultas_id','prodi_id','nama_lengkap','nohp','semester','ipk','gaji_ortu','usia','sertifikat','organisasi'];
	
	public function fakultas()
    {
    	return $this->belongsTo('App\Fakultas');
    }
    public function prodi()
    {
    	return $this->belongsTo('App\Prodi');
    }
    public function pendaftar_beasiswa()
    {
    	return $this->hasMany('App\Pendaftar_Beasiswa');
    }    
}
