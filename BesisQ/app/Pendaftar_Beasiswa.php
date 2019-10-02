<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar_Beasiswa extends Model
{
    protected $table = 'pendaftar_beasiswa';
    protected $fillable = ['id','user_id','beasiswa_id','point','bukti_ipk','bukti_gaji','bukti_sertifikat'];


    public function beasiswa()
    {
    	return $this->belongsTo('App\Beasiswa');
    }
    public function mahasiswa()
    {
    	return $this->belongsTo('App\Mahasiswa');
    }  

}
