<?php

namespace App\Http\Controllers;
use \App\Beasiswa;
use \App\Fakultas;
use \App\Prodi;
use Auth;
use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeasiswaController extends Controller
{
    public function dashbardAdmin()
    {
        return 'ADMIN';
    }
    public function index()
    {
        $fak = Fakultas::All();
        return view('beasiswa.form-create', ['fak' => $fak]);
    }

    public function prodi(Request $request)
    {
        $id_fakultas = $request->fakultas_id;
        // $id_fakultas = Input::get('fakultas_id');
        $prodi = Prodi::where('fakultas_id','=', $id_fakultas)->get();
        return response()->json($prodi);
    }
    public function beasiswaShow($slug)
    {
        // \App\Beasiswa::where()
        // return view()
    }

    public function listBeasiswa()
    {
    	$beasiswanya = Beasiswa::select('beasiswa.id as besisid','beasiswa.*','users.id as userid','users.*')
    		->join('users','users.id','=','beasiswa.perusahaan_id')
    		->orderBy('beasiswa.created_at','desc')
    		->get();
    	return view('beasiswa.indexmahasiswa',compact('beasiswanya'));
    }
    public function create(Request $request)
    {
    	$userid = auth()->user()->id;
    	// $perusahaanid = \App\Perusahaan::select('id')->where('user_id','=',$userid)->first();
    	// dd($perusahaanid);

    	$bea = new \App\Beasiswa;
    	$bea->id = mt_rand(1000,9999);
    	$bea->perusahaan_id = $userid;
        $bea->fakultas_id = $request->fakultas;
        $bea->prodi_id = $request->prodi;
    	$bea->nama_beasiswa = $request->nama_beasiswa;
    	$bea->slug_beasiswa = Str::slug($request->nama_beasiswa, '-');
        $bea->ipk = $request->ipk;            	
        $bea->point_ipk = $request->point_ipk;              
        $bea->gaji = $request->gaji;              
        $bea->point_gaji = $request->point_gaji;              
        $bea->usia = $request->usia;
        $bea->point_usia = $request->point_usia;              
        $bea->sertifikat = $request->sertifikat;
        $bea->point_sertifikat = $request->point_sertifikat;

        $bea->save();

    	return redirect()->back()->with('sukses','Berhasil Membuat Beasissssswaaa . . . !');
    }
    public function detail($slug_beasiswa)
    {
        $userid = auth()->user()->id;
        $data_mahasiswa = \App\Mahasiswa::where('user_id','=',$userid)->first();
    	
        $bea = \App\Beasiswa::where('slug_beasiswa','=',$slug_beasiswa)->first();

        $ipkB = $bea->ipk;
        $pointIPK = $bea->point_ipk;

        $gajiB = $bea->gaji;
        $pointgaji = $bea->point_gaji;

        // ipk //
        if (empty($bea->ipk)) {
            $bulatHasilPointIPK = 0;  
        }else{
            $ipkM = $data_mahasiswa->ipk;
            $ipkB = $bea->ipk;
            $pointipk = $bea->point_ipk;        
            $hasilPointIPK = $ipkM / $ipkB * $pointipk; 
            $bulatHasilPointIPK = round($hasilPointIPK,2);
        }

        // gaji //
        if (empty($bea->gaji)) {
            $bulatHasilPointGAJI = 0;  
        }else{
            $gajiM = $data_mahasiswa->gaji_ortu;
            $gajiB = $bea->gaji;
            $pointgaji = $bea->point_gaji;        
            $hasilPointGAJI = $gajiM / $gajiB * $pointgaji; 
            $bulatHasilPointGAJI = round($hasilPointGAJI,2);
        }

        // usia //
        if (empty($bea->usia)) {
            $bulatHasilPointUMUR = 0;  
        }else{
            $umurM = $data_mahasiswa->usia;
            $usiaB = $bea->usia;
            $pointumur = $bea->point_usia;        
            $hasilPointUMUR = $umurM / $usiaB * $pointumur; 
            $bulatHasilPointUMUR = round($hasilPointUMUR,2);
        }


        // Rumusnya // 

        $totalPoint = $bulatHasilPointGAJI + $bulatHasilPointIPK + $bulatHasilPointUMUR;
         
         dd($totalPoint);   

        // return view('beasiswa.detail',['bea' => $bea,'data_mahasiswa' => $data_mahasiswa]);
    }
}
