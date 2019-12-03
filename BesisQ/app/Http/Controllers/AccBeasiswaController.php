<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AccBeasiswaController extends Controller
{
    public function index()
    {
        $r = mt_rand(1,2);
        $s = mt_rand(3,4);
        $t = mt_rand(5,6);
    	$beasiswa = \App\Beasiswa::where('status','=','tidak aktiv')->first();
        if (empty($beasiswa)) {
            $isEmpty = "yes";
        }else{
            $isEmpty = "no";
            $pendaftar = \App\Beasiswa::where('status','=','tidak aktiv')->get();
            $beasiswaCuco = \App\Beasiswa::select('*')
                ->where('status','=','tidak aktiv')
                ->whereNotIn('id',function($query){
                    $query->select('beasiswa_id')->from('beasiswa_revisi');
                })
                ->get();
            $beasiswaFakCuco = \App\Beasiswa::select('*')
                ->whereNull('prodi_id')
                ->where('status','=','tidak aktiv')
                ->whereNotIn('id',function($query){
                    $query->select('beasiswa_id')->from('beasiswa_revisi');
                })
                ->get();
            $beasiswaFree = \App\Beasiswa::select('*')
                ->where('status','=','tidak aktiv')
                ->whereNotIn('id',function($query){
                    $query->select('beasiswa_id')->from('beasiswa_revisi');
                })
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
    public function decc(Request $req)
    {
        \App\BeasiswaRevisi::create([
            'id' => mt_rand(100,999),
            'beasiswa_id' => $req->idnya,
            'jenis_kesalahan' => $req->kesalahan,
            'catatan' => $req->catatan,
        ]);
        return redirect()->back()->with('sukses','Berhasil memverifikasi Beasiswa');
    }
    public function proses()
    {
        $userID = Auth::user()->id; 
        $perusahaan = \App\Perusahaan::where('user_id','=',$userID)->first();

        $r = mt_rand(1,6);
        $s = mt_rand(1,6);
        $t = mt_rand(1,6);

        $beasiswaCuco = \App\Beasiswa::select('*')
                ->where('perusahaan_id','=',$perusahaan->id)
                ->where('status','=','tidak aktiv')
                ->whereNotIn('id',function($query){
                    $query->select('beasiswa_id')->from('beasiswa_revisi');
                })
                ->get();
        $beasiswaFakCuco = \App\Beasiswa::select('*')
            ->where('perusahaan_id','=',$perusahaan->id)
            ->whereNull('prodi_id')
            ->where('status','=','tidak aktiv')
            ->whereNotIn('id',function($query){
                $query->select('beasiswa_id')->from('beasiswa_revisi');
            })
            ->get();
        $beasiswaFree = \App\Beasiswa::select('*')
            ->where('perusahaan_id','=',$perusahaan->id)
            ->whereNull('fakultas_id')
            ->whereNull('prodi_id')
            ->where('status','=','tidak aktiv')
            ->whereNotIn('id',function($query){
                $query->select('beasiswa_id')->from('beasiswa_revisi');
            })
            ->get();       

        //==BEASISWA REVISI==//

        $beasiswaCucoR = \App\Beasiswa::select('*')
            ->where('perusahaan_id','=',$perusahaan->id)
                ->where('status','=','tidak aktiv')
                ->whereIn('id',function($query){
                    $query->select('beasiswa_id')->from('beasiswa_revisi');
                })
                ->get();
        $beasiswaFakCucoR = \App\Beasiswa::select('*')
            ->where('perusahaan_id','=',$perusahaan->id)
            ->whereNull('prodi_id')
            ->where('status','=','tidak aktiv')
            ->whereIn('id',function($query){
                $query->select('beasiswa_id')->from('beasiswa_revisi');
            })
            ->get();
        $beasiswaFreeR = \App\Beasiswa::select('*')
            ->where('perusahaan_id','=',$perusahaan->id)
            ->whereNull('fakultas_id')
            ->whereNull('prodi_id')
            ->where('status','=','tidak aktiv')
            ->whereIn('id',function($query){
                $query->select('beasiswa_id')->from('beasiswa_revisi');
            })
            ->get();       
            

        return view('beasiswa.proses',compact('beasiswaCuco','beasiswaFakCuco','beasiswaFree','r','s','t','beasiswaCucoR','beasiswaFakCucoR','beasiswaFreeR'));
    }
}
