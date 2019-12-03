<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['id','user_id','fakultas_id','prodi_id','nama_lengkap','nohp','semester','ipk','gaji_ortu','usia','sertifikat','organisasi','nim'];
	
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
    	return $this->belongsTo('App\Pendaftar_Beasiswa');
    }    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
