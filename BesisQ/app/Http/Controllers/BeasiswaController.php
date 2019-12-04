<?php

namespace App\Http\Controllers;

use PDF;
use \App\Beasiswa;
use \App\Fakultas;
use \App\Prodi;
use Auth;
use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class BeasiswaController extends Controller
{

    public function pengumuman()
    {
        $r = mt_rand(1,6);
        $s = mt_rand(1,6);
        $t = mt_rand(1,6);
        $beasiswa = \App\Beasiswa::where('status','selesai')
                        ->get();
        return view('beasiswa.pengumuman.index', compact('beasiswa','r','s','t'));
    }
    public function dueDate()
    {
        $r = mt_rand(1,6);
        $s = mt_rand(1,6);
        $t = mt_rand(1,6);
        $now = date('Y-m-d H:i:s');
        $beasiswa = \App\Beasiswa::select('*')
            ->where('status','=','aktiv')
            ->where('batas_akhir', '<', $now)            
            ->get();
        return view('beasiswa.duedate', compact('beasiswa','r','s','t'));
    }
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
        $timeNow = Carbon::now();
    	$userid = auth()->user()->id;
    	$perusahaanid = \App\Perusahaan::where('user_id','=',$userid)->first();
    	// dd($perusahaanid);
        $tot = ($request->point_ipk+$request->point_gaji+$request->point_organisasi+$request->point_sertifikat);
        if ($tot > 100) {
            return redirect()->back()->with('gagal','total dari point tidak dapat lebih dari 100');
        }else if($tot < 100) {
            return redirect()->back()->with('gagal','total dari point tidak dapat kurang dari 100');
        }else if($tot = 100) {
        
        if ($request->batas_akhir <= $timeNow) {
            return redirect()->back()->with('gagal','Waktu yang di tentukan tidak boleh kurang dari waktu sekarang');
        }else{


    	$bea = new \App\Beasiswa;
    	$bea->id = mt_rand(1000,9999);
        \App\BeasiswaAtribut::create([
            'id' => mt_rand(1000,9999),
            'beasiswa_id' => $bea->id,
            'right_text' => $request->right_text,
            'middle_text' => $request->middle_text,
        ]);
    	$bea->perusahaan_id = $perusahaanid->id;
        $bea->fakultas_id = $request->fakultas;
        $bea->prodi_id = $request->prodi;
        $bea->nama_beasiswa = $request->nama_beasiswa;
        $bea->batas_akhir = $request->batas_akhir;
    	$bea->slug_beasiswa = Str::slug($request->nama_beasiswa, '-');
        $bea->status = 'tidak aktiv';      	
        $bea->point_ipk = $request->point_ipk;              
        $bea->minimal_point = $request->minimal_point;      
        $bea->point_gaji = $request->point_gaji;               
        $bea->point_organisasi = $request->point_organisasi;
        $bea->point_sertifikat = $request->point_sertifikat;

        $bea->save();

    	return redirect()->back()->with('sukses','Berhasil Membuat Beasissssswaaa . . . !');
        }    
        }
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
         
         // dd($totalPoint);   

        return view('beasiswa.detail',['bea' => $bea,'data_mahasiswa' => $data_mahasiswa]);
    }

    public function update(Request $req)
    {
        $tot = ($req->point_ipk+$req->point_gaji+$req->point_organisasi+$req->point_sertifikat);
        if ($tot > 100) {
            return redirect()->back()->with('gagal','total dari point tidak dapat lebih dari 100');
        }else if($tot < 100) {
            return redirect()->back()->with('gagal','total dari point tidak dapat kurang dari 100');
        }else if($tot = 100) {


        $checkIN = \App\Beasiswa::select('*')
            ->where('id','=',$req->idnya)
            ->whereIn('id',function($query){
                    $query->select('beasiswa_id')->from('beasiswa_revisi');
                })
            ->first();

        //==JIKA KOSONG=========================================================//
        if (empty($checkIN)) {
            \App\Beasiswa::where('id','=',$req->idnya)
            ->update([
                'point_ipk' => $req->point_ipk,
                'point_gaji' => $req->point_gaji,
                'point_organisasi' => $req->point_organisasi,
                'point_sertifikat' => $req->point_sertifikat,
            ]);
            

        }else if(!empty($checkIN)){
             \App\Beasiswa::where('id','=',$req->idnya)
            ->update([
                'point_ipk' => $req->point_ipk,
                'point_gaji' => $req->point_gaji,
                'point_organisasi' => $req->point_organisasi,
                'point_sertifikat' => $req->point_sertifikat,
            ]);
            \App\BeasiswaRevisi::where('beasiswa_id','=',$req->idnya)->delete();
        }    

        return redirect()->back()->with('sukses','Behasil mengubah data beasiswa');
    }
    }

    public function publish(Request $req)
    {
        \App\Beasiswa::whereId($req->idBea)
            ->update([
                'status' => 'selesai',
            ]);
        foreach ($req->idnya as $target) {
            \App\Pendaftar_Beasiswa::where('user_id',$target)
                ->delete();
        }
        return redirect()->back()->with('sukses','berhasil melakukan publish');
    }

    public function detailPengumuman($slug_beasiswa)
    {
        $now = date('Y-m-d H:i:s');
        $idBea = \App\Beasiswa::where('slug_beasiswa','=', $slug_beasiswa)->first();
        
        $cek = \App\Pendaftar_Beasiswa::select('*')
            ->join('mahasiswa','mahasiswa.user_id','=','pendaftar_beasiswa.user_id')
            ->where('beasiswa_id','=',$idBea->id)
            ->first();    
        
        if (empty($cek)) {
                $isEmpty = "yes";
        }else{    
        $isEmpty = "no";    
        $pendaftar = \App\Pendaftar_Beasiswa::select('*')
            ->where('beasiswa_id','=',$idBea->id)
            ->orderBy('point', 'desc')
            ->get();

        // dd($pendaftar->point);

        }    
        return view('beasiswa.pengumuman.detail', compact('pendaftar','idBea','isEmpty','now'));
    }

    public function cetak($slug_beasiswa)
    {
        $idBea = \App\Beasiswa::where('slug_beasiswa','=', $slug_beasiswa)->first();
        $pendaftar = \App\Pendaftar_Beasiswa::select('*')
            ->where('beasiswa_id','=',$idBea->id)
            ->orderBy('point', 'desc')
            ->get();

        $pdf = PDF::loadview('beasiswa.print-out',compact('idBea','pendaftar'));
        return $pdf->download('Hasil-Pengumuman-Beasiswa-'. $idBea->nama_beasiswa.'.pdf');
    }
}
