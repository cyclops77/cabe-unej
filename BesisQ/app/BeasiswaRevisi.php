<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeasiswaRevisi extends Model
{
    protected $table = 'beasiswa_revisi';
    protected $fillable = ['id', 'beasiswa_id','jenis_kesalahan','catatan'];  

    public function Beasiswa()
    {
    	return $this->belongsTo('App\Beasiswa');
    }
}
