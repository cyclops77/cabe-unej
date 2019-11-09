<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class PendaftarBeasiswaController extends Controller
{
    public function index()
    {
    	$idnya = auth()->user()->id;
        $r = mt_rand(1,2);
        $perusahaan = \App\Perusahaan::where('user_id','=',$idnya)->first();
    	$beasiswaPerusahaan = \App\Beasiswa::where('perusahaan_id','=',$perusahaan->id)
            ->where('status','=','aktiv')
            ->get();	
    	return view('pendaftar.index',['beasiswaPerusahaan'=> $beasiswaPerusahaan,'r'=>$r]);
    }
    public function pendaftar($slug_beasiswa)
    {
    	$idBea = \App\Beasiswa::where('slug_beasiswa','=', $slug_beasiswa)->first();
        
        $cek = \App\Pendaftar_Beasiswa::select('*')
            ->join('mahasiswa','mahasiswa.user_id','=','pendaftar_beasiswa.user_id')
            ->where('beasiswa_id','=',$idBea->id)->first();    
    	
        if (empty($cek)) {
                $isEmpty = "yes";
        }else{    
        $isEmpty = "no";    
        $pendaftar = \App\Pendaftar_Beasiswa::select('*')
    		->join('mahasiswa','mahasiswa.user_id','=','pendaftar_beasiswa.user_id')
    		->where('beasiswa_id','=',$idBea->id)->get();

    	// dd($pendaftar->point);

        }    
    	return view('pendaftar.detail', compact('pendaftar','idBea','isEmpty'));	
    }
}
