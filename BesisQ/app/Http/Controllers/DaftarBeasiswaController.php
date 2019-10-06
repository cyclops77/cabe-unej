<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use DB;
use \App\Pendaftar_Beasiswa;
use Illuminate\Http\Request;

class DaftarBeasiswaController extends Controller
{
    public function detail($slug_beasiswa)
    {
        $userid = auth()->user()->id;
    
        $data_mahasiswa = \App\Mahasiswa::where('user_id','=',$userid)->first();
    	
        $bea = \App\Beasiswa::where('slug_beasiswa','=',$slug_beasiswa)->first();

        $beaID = $bea->id;

           


        $ipkB = $bea->ipk;
        $pointIPK = $bea->point_ipk;
        $ipkM = $data_mahasiswa->ipk;

        $gajiB = $bea->gaji;
        $pointgaji = $bea->point_gaji;
        $gajiM = $data_mahasiswa->gaji;

        $sertifM = $data_mahasiswa->sertifikat;
        $sertifB = $bea->sertifikat;
        $pointsertif = $bea->point_sertifikat; 
        // ipk //

        if (empty($bea->ipk)) {
            $bulatHasilPointIPK = 0;  
        }
        else if ($ipkB < $ipkM) {
            $bulatHasilPointIPK = $bea->point_ipk;  
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
        }else if ($gajiB > $gajiM) {
            $bulatHasilPointGAJI = $bea->point_gaji;  
        }
        else{
            $gajiM = $data_mahasiswa->gaji_ortu;
            $gajiB = $bea->gaji;
            $pointgaji = $bea->point_gaji;        
            $hasilPointGAJI = $gajiB/$gajiM  * $pointgaji; 
            $bulatHasilPointGAJI = round($hasilPointGAJI,2);
        }

         // sertifikat //
        if (empty($bea->sertifikat)) {
            $bulatHasilPointSERTIF = 0;  
        }else if ($sertifB < $sertifM) {
            $bulatHasilPointSERTIF = $bea->point_sertifikat;  
        }
        else{        
            $hasilPointSERTIF = $sertifM/$sertifB  * $pointsertif; 
            $bulatHasilPointSERTIF = round($hasilPointSERTIF,2);
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

        $totalPoint = $bulatHasilPointGAJI + $bulatHasilPointIPK + $bulatHasilPointUMUR + $bulatHasilPointSERTIF;
         

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
                      
                    ';
            $btn1 = '<a class="mb-xs mt-xs mr-xs modal-basic btn btn-danger col-md-12" href="#modalFullColorDanger2">Batalkan Beasiswa</a>';                   
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


        $tempatfile = ('bukti');


        if (empty($request->file('bukti_ipk'))) {
//      INI GAJI
        $filenyagaji = $request->file('bukti_gaji');
        $nama_filegaji = $filenyagaji->getClientOriginalName().date("Y-m-d");
        $filenyagaji->move($tempatfile, $nama_filegaji);
//      INI SERTIF        
        $filenyasertifikat = $request->file('bukti_sertifikat');
        $nama_filesertifikat = $filenyasertifikat->getClientOriginalName().date("Y-m-d");
        $filenyasertifikat->move($tempatfile, $nama_filesertifikat);
        }
        else if((empty($request->file('bukti_gaji'))) && (empty($request->file('bukti_sertifikat'))) ) {
//      INI IPK
        $filenyaipk = $request->file('bukti_ipk');
        $nama_fileipk = $filenyaipk->getClientOriginalName().date("Y-m-d");
        $filenyaipk->move($tempatfile, $nama_fileipk);

        $nama_filegaji='';
        $nama_filesertifikat='';

        }else{
//      INI IPK
        $filenyaipk = $request->file('bukti_ipk');
        $nama_fileipk = $filenyaipk->getClientOriginalName().date("Y-m-d");
        $filenyaipk->move($tempatfile, $nama_fileipk);
//      INI GAJI
        $filenyagaji = $request->file('bukti_gaji');
        $nama_filegaji = $filenyagaji->getClientOriginalName().date("Y-m-d");
        $filenyagaji->move($tempatfile, $nama_filegaji);
//      INI SERTIF        
        $filenyasertifikat = $request->file('bukti_sertifikat');
        $nama_filesertifikat = $filenyasertifikat->getClientOriginalName().date("Y-m-d");
        $filenyasertifikat->move($tempatfile, $nama_filesertifikat);


        }


        $upl = new \App\Pendaftar_Beasiswa;
        $upl->id = mt_rand(1000,9999);
        $upl->user_id = $user->id;
        $upl->beasiswa_id = $request->idbeasiswa;
        $upl->bukti_ipk = $nama_fileipk;
        $upl->bukti_gaji = $nama_filegaji;
        $upl->bukti_sertifikat = $nama_filesertifikat;
        $upl->point = $request->totalPoint;
        $upl->save();

        return redirect()->back()->with('sukses','Berhasil Daftar Beasiswa');
    }
    public function hapusPengajuan(Request $request)
    {
    
        $a = Pendaftar_Beasiswa::where('beasiswa_id','=', $request->idHiddenBEA)
            ->where('user_id','=',$request->idHiddenMHS)
            ->delete();
        // DB::table('pendaftar_beasiswa')->where('id','=',$myID)->delete();    
        return redirect()->back()->with('sukses','Berhasil membatalkan pengajuan Beasiswa');
    }
}
