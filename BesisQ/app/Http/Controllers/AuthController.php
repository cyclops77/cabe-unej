<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
    	return view('public.auth.login');
    }
    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/index');
    	}
    	return redirect()->back()->with('gagal','Email atau Password salah atau tidak tepat');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('sukses','Berhasil Logout');
    }
    public function role()
    {
        $role = Auth()->user()->role;
        if (Auth()->user()->role == 'admin') {
            return view('landpage.admin');
        }else if (Auth()->user()->role == 'mahasiswa') {
            return view('landpage.index');
        }else if (Auth()->user()->role == 'perusahaan') {
            $userid = Auth::user()->id;
            $perusahaan = \App\Perusahaan::where('user_id','=',$userid)->first();
            return view('landpage.perusahaan',compact('perusahaan'));
        }
    }
    public function roleIf()
    {
        $role = Auth()->user()->role;
        if (Auth()->user()->role == 'admin') {
            return view('landpage.admin');
        }else if (Auth()->user()->role == 'mahasiswa') {
            return view('landpage.index');
        }else if (Auth()->user()->role == 'perusahaan') {
            $userid = Auth::user()->id;
            $perusahaan = \App\Perusahaan::where('user_id','=',$userid)->first();
            return view('landpage.perusahaan',compact('perusahaan'));
        }
    }
}
