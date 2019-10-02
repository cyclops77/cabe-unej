<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function indexPerusahaan()
    {
    	$profileid = auth()->user()->id;
    	$akun = \App\Perusahaan::where('user_id','=',$profileid)->first();
    	$profile = auth()->user();
    	return view('profile.perusahaan',['profileid' => $profileid,'profile'=>$profile,'akun' => $akun]);
    }
    public function indexMahasiswa()
    {
    	$profileid = auth()->user()->id;
    	$akun = \App\Mahasiswa::where('user_id','=',$profileid)->first();
    	$profile = auth()->user();
    	return view('profile.mahasiswa',['profileid' => $profileid,'profile'=>$profile,'akun' => $akun]);
    }
    public function update(Request $req)
    {
        $profileid = auth()->user()->id;
        \App\Mahasiswa::where('user_id','=',$profileid)->update([
            'nama_lengkap' => $req->nama_lengkap,
            'nohp' => $req->nohp,
            'semester' => $req->semester,
            'ipk' => $req->ipk, 
        ]);
        return redirect()->back();
    }
}
