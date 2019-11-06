<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use \App\Fakultas;
use \App\Prodi;


class RegisterController extends Controller
{
    public function index()
    {
        $fak = Fakultas::All();
    	return view('public.mahasiswa.register', ['fak' => $fak]);
    }

    public function prodi(Request $request)
    {
        $id_fakultas = $request->fakultas_id;
        // $id_fakultas = Input::get('fakultas_id');
        $prodi = Prodi::where('fakultas_id','=', $id_fakultas)->get();
        return response()->json($prodi);
    }
    public function create(Request $request)
    {
        $thisError = "none";
        $prodi = \App\Prodi::where('id','=',$request->prodi)->first();
        $nim = (String)$prodi->nim; 
        
       

        if (strpos((String)$request->nim,$nim)) {
    	$user = new \App\User;
    	$user->role = 'mahasiswa';
    	$user->id = mt_rand(10000,19999);
    	$mhs = \App\Mahasiswa::create([
            'id' => mt_rand(10000,19999),
    		'user_id' => $user->id,
            'fakultas_id' => $request->fakultas,
            'prodi_id' => $request->prodi,
    		'nama_lengkap' => $request->nama_lengkap,
    		'nohp' => $request->nohp,
    		'semester' => $request->semester,
    		'ipk' => $request->ipk,
    		'gaji_ortu' => $request->gaji_ortu,
            'sertifikat' => $request->jumlah_sertifikat,
            'organisasi' => $request->organisasi
    	]);
    	$user->name = $request->nama_lengkap;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);

    	$user->save();

    	return redirect('/login');
    }else if(!strpos($request->nim,$nim)){
        $thisError = "Nim dan Prodi anda tidak sinkron";
        return view('public.mahasiswa.gagal-verif',compact('thisError'));
    }else if($request->password2 !== $request->password && !strpos($request->nim,$nim)){
        $thisError = "Password anda tidak sesuai dan juga Nim dan Prodi anda tidak sinkron";
        return view('public.mahasiswa.gagal-verif',compact('thisError'));
    }else if($request->password2 !== $request->password){
        $thisError = "Password anda tidak sesuai";
        return view('public.mahasiswa.gagal-verif',compact('thisError'));
    }
    }
}
