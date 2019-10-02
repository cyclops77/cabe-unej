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

    	$beasiswaCuco = \App\Beasiswa::where('fakultas_id','=',$mahasiswa->fakultas_id)
    		->where('prodi_id','=',$mahasiswa->prodi_id)
    		->get();
    	$beasiswaFakCuco = \App\Beasiswa::where('fakultas_id','=',$mahasiswa->fakultas_id)
    		->whereNull('prodi_id')
    		->get();
        $beasiswaFree = \App\Beasiswa::whereNull('fakultas_id')
            ->whereNull('prodi_id')
            ->get();           

        // $beasiswaCuco = \App\Prodi::select('prodi.nama','fakultas.nama_fak')->join('fakultas','fakultas.id','=','prodi.fakultas_id')->get();

    	return view('beasiswa.list',['beasiswaCuco' => $beasiswaCuco,'beasiswaFakCuco' => $beasiswaFakCuco,'beasiswaFree'=> $beasiswaFree]);

    	// dd($beasiswaCuco);
    }
}
