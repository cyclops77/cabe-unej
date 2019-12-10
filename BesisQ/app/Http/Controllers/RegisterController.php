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

        $cek = \App\User::where('email','=',$request->email)
            ->first();
            if (empty($cek)) { 
                if (strpos((String)$request->nim,$nim)) {

                    if($request->password2 !== $request->password){
                        $arr["thisError"] = "Password anda tidak sesuai";
                        $arr["linkBack"] = "daftar-mahasiswa";
                        return view('error',compact('arr'));
                    }else if(!preg_match("/^[a-zA-Z ]*$/", $request->nama_lengkap)){
                        $arr["thisError"] = "Nama lengkap harus berupa Huruf";
                        $arr["linkBack"] = "daftar-mahasiswa";
                        return view('error',compact('arr'));
                    }
                    else{
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
                            'organisasi' => $request->organisasi,
                            'nim' => $request->nim,
                    	]);
                    	$user->name = $request->nama_lengkap;
                    	$user->email = $request->email;
                    	$user->password = bcrypt($request->password);

                    	$user->save();

                    	return redirect('/login')->with('sukses','Berhasil Membuat Akun Mahasiswa, Silahkan Login');
                    }
            }else if(!strpos($request->nim,$nim)){
                $arr["thisError"] = "Nim dan Prodi anda tidak sinkron";
                $arr["linkBack"] = "daftar-mahasiswa";
                
                return view('error', compact('arr'));
            
            }
        }else{
           $arr["thisError"] = "Email telah digunakan";
           $arr["linkBack"] = "daftar-mahasiswa";
                
           return view('error',compact('arr')); 
        }
    }
}
