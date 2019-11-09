<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccBeasiswaController extends Controller
{
    public function index()
    {
    	$r = mt_rand(1,2);
    	$beasiswa = \App\Beasiswa::where('status','=','tidak aktiv')->first();
        if (empty($beasiswa)) {
            $isEmpty = "yes";
        }else{
            $isEmpty = "no";
            $pendaftar = \App\Beasiswa::where('status','=','tidak aktiv')->get();
            $beasiswaCuco = \App\Beasiswa::select('*')
                ->whereNotNull('fakultas_id')
                ->whereNotNull('prodi_id')
                ->where('status','=','tidak aktiv')
                ->get();
            $beasiswaFakCuco = \App\Beasiswa::select('*')
                ->whereNull('prodi_id')
                ->where('status','=','tidak aktiv')
                ->get();
            $beasiswaFree = \App\Beasiswa::select('*')
                ->whereNull('fakultas_id')
                ->whereNull('prodi_id')
                ->where('status','=','tidak aktiv')
                ->get();           
        }
        return view('admin.beasiswa.index',compact('pendaftar','isEmpty','r','beasiswaCuco','beasiswaFree','beasiswaFakCuco'));
    }
    public function acc(Request $req)
    {
        \App\Beasiswa::where('id','=',$req->idnya)
            ->update([
                'status' => 'aktiv',
            ]);
        return redirect()->back()->with('sukses','Berhasil memverifikasi Beasiswa');
    }
}
