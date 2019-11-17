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
        $now = date('Y-m-d H:i:s');
        $r = mt_rand(1,2);
        $userid = auth()->user()->id;
    
        $data_mahasiswa = \App\Mahasiswa::where('user_id','=',$userid)->first();
    	
        $bea = \App\Beasiswa::where('slug_beasiswa','=',$slug_beasiswa)->first();

        $beaID = $bea->id;

        $ipkM = $data_mahasiswa->ipk;
        $sertifM = $data_mahasiswa->sertifikat;
        $orgM = $data_mahasiswa->organisasi;   
        $gajiM = $data_mahasiswa->gaji_ortu;


        $ipkB = $bea->ipk;
        $pointIPK = $bea->point_ipk;

        $gajiB = $bea->gaji;
        $pointgaji = $bea->point_gaji;

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

        $cmax = 4;
        $cmin = 1;

        if ($ipkM<=4.00 && $ipkM>=3.50) {
            $paramIPK = 1;
        }else if ($ipkM<=3.50 && $ipkM>=3.00) {
            $paramIPK = 2;
        }else if ($ipkM<=3.00 && $ipkM>=2.50) {
            $paramIPK = 3;
        }else if ($ipkM<=2.50 && $ipkM>=1.00) {
            $paramIPK = 4;
        }

        if ($gajiM<=1000000 && $gajiM>=100000) {
            $paramGaji = 1;
        }else if ($gajiM>=1000000 && $gajiM<=3000000) {
            $paramGaji = 2;
        }else if ($gajiM>=3000000 && $gajiM<=6000000) {
            $paramGaji = 3;
        }else if ($gajiM>=6000000 && $gajiM<=15000000) {
            $paramGaji = 4;
        }

        if ($sertifM<=25 && $sertifM>=15) {
            $paramSertif = 1;
        }else if ($sertifM<=15 && $sertifM>=9) {
            $paramSertif = 2;
        }else if ($sertifM<=9 && $sertifM>=4) {
            $paramSertif = 3;
        }else if ($sertifM<=4 && $sertifM>=0) {
            $paramSertif = 4;
        }

        if ($orgM=="Ketua dan Wakil Ketua") {
            $paramOrg = 1;
        }else if ($orgM=="Pengurus Inti") {
            $paramOrg = 2;
        }else if ($orgM=="Pengurus Divisi") {
            $paramOrg = 3;
        }else if ($orgM=="Anggota") {
            $paramOrg = 4;
        }

        //== NORMALISASI ==//
        $pIPK = $bea->point_ipk/100;
        $pGAJI = $bea->point_gaji/100;
        $pORG = $bea->point_organisasi/100;
        $pSER = $bea->point_sertifikat/100;


        
        $nIPK = $pIPK;
        $nGAJI = $pGAJI;
        $nSERTIF = $pSER;
        $nORG = $pORG;
        //=================//

        //== UTILITY ==//
        $uIPK = ($cmax-$paramIPK)/($cmax-$cmin);
        $uGAJI = ($cmax-$paramGaji)/($cmax-$cmin);
        $uSERTIF = ($cmax-$paramSertif)/($cmax-$cmin);
        $uORG = ($cmax-$paramOrg)/($cmax-$cmin);
        //=================//

        $hasilAkhir = (($uIPK*$nIPK)+($uGAJI*$nGAJI)+($uSERTIF*$nSERTIF)+($uORG*$nORG))*100;

        if ($hasilAkhir >= 0 && $hasilAkhir <= 29) {
            $output = "Tidak Berhasil";
        }else if ($hasilAkhir >= 29 && $hasilAkhir <= 70) {
            $output = "Dipertimbangkan";
        }else if ($hasilAkhir >= 70 && $hasilAkhir <= 100) {
            $output = "Berhasil";
        }


        $totalPoint = $hasilAkhir;
                     

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



        //=====jika maksa masuk pas udah timeout///////////////////////

        
            $btnZ = '
                      <button type="button" class="button button-postComment" data-toggle="modal" data-target="#timeoutBRO" style="width: 100%">
                          Daftar Beasiswa
                      </button>
                    ';              
            

        if ($SDBL === null && $SDBL_slug === null) {
            $btn = '
                      <button type="button" class="button button-postComment" data-toggle="modal" data-target="#exampleModalCenter3" style="width: 100%">
                          Daftar Beasiswa
                      </button>
                    ';
            $btn1 = '';                    
        }
        else if ($SDBL !== null && $SDBL_slug === null) {
            $btn = '
                      <button type="button" class="button button-postComment" data-toggle="modal" data-target="#exampleModalCenter" style="width: 100%">
                          Daftar Beasiswa
                      </button>
                    ';
            $btn1 = '';                    
        }
        else if($SDBL !== null && $SDBL_slug !== null){
            $btn = '
                      
                    ';
            $btn1 = '
                    <button type="button" class="button button-postComment" data-toggle="modal" data-target="#exampleModalCenter2" style="width: 100%">
                          Batalkan Pengajuan
                    </button>
            ';                   
        }         
        else{
            $btn = '
                      <button type="button" class="button button-postComment" data-toggle="modal" data-target="#exampleModalCenter3" style="width: 100%">
                          Daftar Beasiswa
                      </button>
                    ';
            $btn1 = '';                    
        }


        
         // dd($SDBL);   
        $perusahaan = \App\Perusahaan::where('id','=',$bea->perusahaan_id)->first();
        $gbr = 'wal'.$r.'.jpg';
        return view('beasiswa.detail',['bea' => $bea,'data_mahasiswa' => $data_mahasiswa,'totalPoint' => $totalPoint,'btn' => $btn,'btn1' => $btn1,'SDBL' => $SDBL,'output' => $output,'r' => $r,'gbr' => $gbr,'perusahaan' => $perusahaan,'now' => $now,'btnZ' => $btnZ]);
    }
    public function daftarSekarang(Request $request)
    {
        $a1 = ($request->file('bukti_ipk'))->getClientOriginalName();
        $a2 = ($request->file('bukti_gaji'))->getClientOriginalName();
        $a3 = ($request->file('bukti_sertifikat'))->getClientOriginalName();
        $a4 = ($request->file('bukti_organisasi'))->getClientOriginalName();

        if ((strpos($a1, "jpg") || strpos($a1, "jpeg") || strpos($a1, "png") || strpos($a1, "docx"))===false) {
            return redirect()->back()->with('gagal','Foto Bukti IPK harus berupa PNG, JPEG, JPG, docx');
        }else if ((strpos($a2, "jpg") || strpos($a2, "jpeg") || strpos($a2, "png") || strpos($a2, "docx"))===false) {
            return redirect()->back()->with('gagal','Foto Bukti Gaji harus berupa PNG, JPEG, JPG, docx');
        }else if ((strpos($a3, "jpg") || strpos($a3, "jpeg") || strpos($a3, "png") || strpos($a3, "docx"))===false) {
            return redirect()->back()->with('gagal','Foto Bukti Sertifikat harus berupa PNG, JPEG, JPG, docx');
        }else if ((strpos($a4, "jpg") || strpos($a4, "jpeg") || strpos($a4, "png") || strpos($a4, "docx"))===false) {
            return redirect()->back()->with('gagal','Foto Bukti Organisasi harus berupa PNG, JPEG, JPG, docx');
        }else{
                $user = Auth::user();

                if (empty($request->file('bukti_gaji'))) {
                    return redirect()->back()->with('gagal','Silahkan upload bukti gaji rang tua');
                }else if (empty($request->file('bukti_ipk'))) {
                    return redirect()->back()->with('gagal','Silahkan upload bukti ipk');
                }else if (empty($request->file('bukti_sertifikat'))) {
                    return redirect()->back()->with('gagal','Silahkan upload bukti sertifikat');
                }else if (empty($request->file('bukti_organisasi'))) {
                    return redirect()->back()->with('gagal','Silahkan upload bukti organisasi');
                }else{

                $tempatfile = ('bukti');

                $filenyaGaji = $request->file('bukti_gaji');
                $nama_fileGaji = $filenyaGaji->getClientOriginalName();
                $filenyaGaji->move($tempatfile, $nama_fileGaji);

                $filenyaIPK = $request->file('bukti_ipk');
                $nama_fileIPK = $filenyaIPK->getClientOriginalName();
                $filenyaIPK->move($tempatfile, $nama_fileIPK);

                $filenyaSERTIFIKAT = $request->file('bukti_sertifikat');
                $nama_fileSERTIFIKAT = $filenyaSERTIFIKAT->getClientOriginalName();
                $filenyaSERTIFIKAT->move($tempatfile, $nama_fileSERTIFIKAT);

                $filenyaORGANISASI = $request->file('bukti_organisasi');
                $nama_fileORGANISASI = $filenyaORGANISASI->getClientOriginalName();
                $filenyaORGANISASI->move($tempatfile, $nama_fileORGANISASI);




                $upl = new \App\Pendaftar_Beasiswa;
                $upl->id = mt_rand(1000,9999);
                $upl->user_id = $user->id;
                $upl->beasiswa_id = $request->idbeasiswa;
                $upl->bukti_ipk = $nama_fileIPK;
                $upl->bukti_gaji = $nama_fileGaji;
                $upl->bukti_sertifikat = $nama_fileSERTIFIKAT;
                $upl->bukti_organisasi = $nama_fileORGANISASI;
                $upl->output = $request->output;
                $upl->point = $request->totalPoint;
                $upl->save();

                return redirect()->back()->with('sukses','Berhasil Daftar Beasiswa');
            }
        }
    
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
