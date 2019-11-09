<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeasiswaAtribut extends Model
{
    protected $table = 'beasiswa_atribut';
    protected $fillable = ['id', 'beasiswa_id','right_text','middle_text'];  

    public function Beasiswa()
    {
    	return $this->belongsTo('App\Beasiswa');
    }
}
