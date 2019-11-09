<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';

    public function Fakultas()
    {
    	return $this->belongsTo('App\Fakultas');
    }
    public function beasiswa()
    {
    	return $this->belongsTo('App\Beasiswa');
    }
}	
