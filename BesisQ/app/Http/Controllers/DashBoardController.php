<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function indexMahasiswa()
    {
    	$idUser = auth()->user()->id;
    	$mahasiswa = \App\Mahasiswa::where('user_id','=',$idUser)->first();

        $r = mt_rand(1,6);
        $s = mt_rand(1,6);
        $t = mt_rand(1,6);
    	$beasiswaCuco = \App\Beasiswa::select('*')
            ->where('fakultas_id','=',$mahasiswa->fakultas_id)
    		->where('prodi_id','=',$mahasiswa->prodi_id)
    		->get();
    	$beasiswaFakCuco = \App\Beasiswa::select('*')
            ->where('fakultas_id','=',$mahasiswa->fakultas_id)
    		->whereNull('prodi_id')
    		->get();
        $beasiswaFree = \App\Beasiswa::select('*')
            ->whereNull('fakultas_id')
            ->whereNull('prodi_id')
            ->get();           

        // $beasiswaCuco = \App\Prodi::select('prodi.nama','fakultas.nama_fak')->join('fakultas','fakultas.id','=','prodi.fakultas_id')->get();

    	return view('beasiswa.list',['beasiswaCuco' => $beasiswaCuco,'beasiswaFakCuco' => $beasiswaFakCuco,'beasiswaFree'=> $beasiswaFree,'r' => $r,'t' => $t,'s' => $s]);

    	// dd($beasiswaCuco);
    }
}
