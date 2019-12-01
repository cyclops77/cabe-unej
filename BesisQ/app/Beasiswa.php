<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $table = 'beasiswa';
    protected $fillable = ['perusahaan_id','nama_beasiswa','slug_beasiswa','point_organisasi','point_ipk','point_gaji','point_usia','batas_akhir'];

    public function perusahaan()
    {
    	return $this->belongsTo('App\Perusahaan');
    }
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
    public function beasiswaAtribut()
    {
        return $this->hasOne('App\BeasiswaAtribut');
    }    
    public function beasiswa_revisi()
    {
        return $this->hasOne('App\BeasiswaRevisi');
    }    
}
