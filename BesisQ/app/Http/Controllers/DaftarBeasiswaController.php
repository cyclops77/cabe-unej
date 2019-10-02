<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use Illuminate\Http\Request;

class DaftarBeasiswaController extends Controller
{
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
         

        // CEK APAKAH DIA SUDAH DAFTAR DI BEA LAIN ?  variabel = SDBL//
        // $sdbl = \App\Pendaftar_Beasiswa::All();

        $SDBL = \App\Pendaftar_Beasiswa::select('*')
            ->join('beasiswa','beasiswa.id','=','pendaftar_beasiswa.beasiswa_id')
            ->where('user_id','=',$userid)
            ->first();
        
        $SDBL_slug = \App\Pendaftar_Beasiswa::select('*')
            ->join('beasiswa','beasiswa.id','=','pendaftar_beasiswa.beasiswa_id')
            ->where('user_id','=',$userid)
            ->where('beasiswa_id','=',$bea->id)
            ->first();            

        if ($SDBL === null && $SDBL_slug === null) {
            $btn = '
                      <a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-primary col-md-12" href="#modalAnim">Daftar Sekarang</a>
                    ';
            $btn1 = '';                    
        }
        else if ($SDBL === null && $SDBL_slug === null) {
            $btn = '
                      <a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-primary col-md-12" href="#modalAnim">Daftar Sekarang</a>
                    ';
            $btn1 = '';                    
        }
        else if($SDBL !== null && $SDBL_slug !== null){
            $btn = '
                      <a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-primary col-md-12" href="#modalFullColorDanger">Daftar Sekarang</a>
                    ';
            $btn1 = '<a class="mb-xs mt-xs mr-xs modal-basic btn btn-danger col-md-12" href="#modalFullColorDanger">Batalkan Beasiswa</a>';                   
        }         
        else{
            $btn = '
                      <a class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-primary col-md-12" href="#modalFullColorDanger">Daftar Sekarang</a>
                    ';
            $btn1 = '';                    
        }


        
         // dd($SDBL);   
        return view('beasiswa.detail',['bea' => $bea,'data_mahasiswa' => $data_mahasiswa,'totalPoint' => $totalPoint,'btn' => $btn,'btn1' => $btn1,'SDBL' => $SDBL]);
    }
    public function daftarSekarang(Request $request)
    {
        $user = Auth::user();



        $filenya = $request->file('bukti_ipk');

        $nama_file = time().'_'.$filenya->getClientOriginalName();

        $tempatfile = ('bukti');

        $filenya->move($tempatfile, $nama_file);

        $upl = new \App\Pendaftar_Beasiswa;
        $upl->id = mt_rand(1000,9999);
        $upl->user_id = $user->id;
        $upl->beasiswa_id = $request->idbeasiswa;
        $upl->bukti_ipk = $nama_file;
        $upl->save();

        return redirect()->back()->with('sukses','Berhasil Daftar Beasiswa');
    }
}
