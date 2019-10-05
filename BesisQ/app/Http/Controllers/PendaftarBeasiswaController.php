<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class PendaftarBeasiswaController extends Controller
{
    public function index()
    {
    	$idnya = auth()->user()->id;
    	$beasiswaPerusahaan = \App\Beasiswa::where('perusahaan_id','=',$idnya)->get();	
    	return view('pendaftar.index',['beasiswaPerusahaan'=> $beasiswaPerusahaan]);
    }
    public function pendaftar($slug_beasiswa)
    {
    	$idBea = \App\Beasiswa::where('slug_beasiswa','=', $slug_beasiswa)->first();
    	$pendaftar = \App\Pendaftar_Beasiswa::select('*')
    		->join('users','users.id','=','pendaftar_beasiswa.user_id')
    		->where('beasiswa_id','=',$idBea->id)->get();
    	// dd($pendaftar->point);
    	return view('pendaftar.detail', ['pendaftar' => $pendaftar]);	
    }
}
