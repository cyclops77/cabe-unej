<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function indexMahasiswa()
    {
        $now = date('Y-m-d H:i:s');
    	$idUser = auth()->user()->id;
    	$mahasiswa = \App\Mahasiswa::where('user_id','=',$idUser)->first();

        $r = mt_rand(1,6);
        $s = mt_rand(1,6);
        $t = mt_rand(1,6);
    	$beasiswaCuco = \App\Beasiswa::select('*')
            ->where('fakultas_id','=',$mahasiswa->fakultas_id)
    		->where('prodi_id','=',$mahasiswa->prodi_id)
            ->where('status','=','aktiv')
            ->where('batas_akhir', '>', $now)
    		->get();
    	$beasiswaFakCuco = \App\Beasiswa::select('*')
            ->where('fakultas_id','=',$mahasiswa->fakultas_id)
    		->whereNull('prodi_id')
            ->where('status','=','aktiv')
            ->where('batas_akhir', '>', $now)            
    		->get();
        $beasiswaFree = \App\Beasiswa::select('*')
            ->whereNull('fakultas_id')
            ->whereNull('prodi_id')
            ->where('status','=','aktiv')
            ->where('batas_akhir', '>', $now)            
            ->get();           

    	return view('beasiswa.list',['beasiswaCuco' => $beasiswaCuco,'beasiswaFakCuco' => $beasiswaFakCuco,'beasiswaFree'=> $beasiswaFree,'r' => $r,'t' => $t,'s' => $s]);
    }
}
