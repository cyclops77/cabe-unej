<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;
use App\Mail\SendEmail;
use App\Mail\SendEmailNot;
use Illuminate\Support\Facades\Crypt;


class PerusahaanController extends Controller
{
    public function index()
    {
    	return view('public.perusahaan.register');
    }
    public function register(Request $request)
    {
        $cek = \App\User::where('email',$request->email_perusahaan)
            ->first();

        $a1 = $request->file('foto')->getClientOriginalName();


        

        if (!empty($cek)) {
           $arr["thisError"] = "Email telah terkait dengan akun user yang telah ada";
           $arr["linkBack"] = "daftar-perusahaan";
                
           return view('error',compact('arr'));
        }else{
            if ((strpos($a1, "jpg") || strpos($a1, "jpeg") || strpos($a1, "png") || strpos($a1, "docx"))===false) {
            $arr["thisError"] = "Foto harus berupa PNG, JPG, JPEG";
           $arr["linkBack"] = "daftar-perusahaan";
                
           return view('error',compact('arr'));            
            }else{
                if (!preg_match("/^[a-zA-Z ]*$/", $request->nama_perusahaan)) {
                    $arr["thisError"] = "Nama perusahaan harus berupa huruf";
                   $arr["linkBack"] = "daftar-perusahaan";
                        
                   return view('error',compact('arr'));
                }else if (!preg_match("/^[a-zA-Z ]*$/", $request->nama_penanggung)) {
                    $arr["thisError"] = "Nama penanggung harus berupa huruf";
                   $arr["linkBack"] = "daftar-perusahaan";
                        
                   return view('error',compact('arr'));
                }
                else{

            $tempatfile = ('bukti_image');

            $gbr = $request->file('foto');
            $nama_Gbr = $gbr->getClientOriginalName();
            $gbr->move($tempatfile, $nama_Gbr);

            $user = new \App\User;
            $user->id = mt_rand(50000,99999);
            $user->role = 'perusahaan';
            \App\Perusahaan::create([
                    'user_id' => $user->id,
                    'nama_perusahaan' => $request->nama_perusahaan,
                    'jenis_perusahaan' => $request->jenis_perusahaan,
                    'email_perusahaan' => $request->email_perusahaan,
                    'nama_penanggung' => $request->nama_penanggung,
                    'status' => 'Belum Terverifikasi',
                    'bukti' => $nama_Gbr,
                ]);
            $user->name = $request->nama_perusahaan;
            $user->email = $request->email_perusahaan;
            $user->password = bcrypt($request->password);

            $user->save();

            return redirect('login')->with('sukses','berhasil membuat akun');
        }
        }
        }
    }

    public function listPendaftar()
    {
        $pendaftar = \App\Perusahaan::where('status','=','Belum Terverifikasi')->first();
        if (empty($pendaftar)) {
            $isEmpty = "yes";
        }else{
            $isEmpty = "no";
            $pendaftar = \App\Perusahaan::where('status','=','Belum Terverifikasi')->get();
        }
        return view('admin.perusahaan.index',compact('pendaftar','isEmpty'));
    }

    public function accRegisterPerusahaan(Request $request)
    {
        \App\Perusahaan::where('id','=',$request->idnya)
            ->update([
                'status' => 'terverifikasi',
            ]);

        $subject = 'Aktivasi Akun Perusahaan';
        $message = $request->contoh;

        $email = $request->email;
        Mail::to($email)->send( new SendEmail($subject, $message));
    

    	return redirect()->back()->with('sukses','berhasil mendaftarkan perusahaan');
    }
    public function DecRegisterPerusahaan(Request $request)
    {
        \App\Perusahaan::where('id','=',$request->idnya)
            ->update([
                'status' => 'tidak terverifif',
            ]);

        $subject = 'Aktivasi Akun Perusahaan';
        $message = $request->contoh;

        $email = $request->email;
        Mail::to($email)->send( new SendEmailNot($subject, $message));
    

        return redirect()->back()->with('gagal','berhasil menolak perusahaan');
    }
}
