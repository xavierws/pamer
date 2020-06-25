<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\BiodataPengajar;
use App\BiodataSiswa;

class AuthController extends Controller
{
    public function pengajarRegisPage(Request $request)
    {
        if(!$request->session()->get('login')){
            return view('registerPengajar');
        }
        
        return redirect("/");
    }

    public function siswaRegisPage(Request $request)
    {
        if(!$request->session()->get('login')){
            return view('registerSiswa');
        }
        
        return redirect("/");
    }

    public function regisPengajar(Request $request)
    {
        $request->validate([
            'password' => ['confirmed'],
            'username' => ['unique:users']
        ]);

        User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'user_type' => 'pengajar'
        ]);

        $user = User::orderBy('id', 'desc')->first();
        BiodataPengajar::create([
            'user_id' => $user->id,
            'nama' => $request->input('nama'),
            'ttl' => $request->input('ttl'),
            'nohp' => $request->input('nohp')
        ]);

        return redirect('/login')->with('success', 'akun berhasil dibuat, silakan login');
    }

    public function regisSiswa(Request $request)
    {
        $request->validate([
            'password' => ['confirmed'],
            'username' => ['unique:users']
        ]);

        User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'user_type' => 'siswa'
        ]);

        $user = User::orderBy('id', 'desc')->first();
        BiodataSiswa::create([
            'user_id' => $user->id,
            'nama' => $request->input('nama'),
            'ttl' => $request->input('ttl'),
            'nohp' => $request->input('nohp')
        ]);

        return redirect('/login')->with('success', 'akun berhasil dibuat, silakan login');
    }

    public function login(Request $request)
    {
        $user = User::where('username', $request->input('username'))->first();
        if($user){
            if ($user->user_type == 'pengajar') {
                if(Hash::check($request->input('password'), $user->password)) {
                    $pengajar = BiodataPengajar::where('user_id', '=', $user->id)->first();
                    $request->session()->put([
                        'login' => true,
                        'user_id' => $user->id,
                        'pengajar_id' => $pengajar->id,
                        'user_type' => $user->user_type,
                        'username' => $user->username,
                        'name' => $pengajar->nama,
                        'email' => $user->email
                    ]);
                    return redirect('/')->with('success', 'anda berhasil login sebagai pengajar');
                }
            } else{
                if(Hash::check($request->input('password'), $user->password)) {
                    $siswa = BiodataSiswa::where('user_id', '=', $user->id)->first();
                    $request->session()->put([
                        'login' => true,
                        'user_id' => $user->id,
                        'siswa_id' => $siswa->id,
                        'user_type' => $user->user_type,
                        'username' => $user->username,
                        'name' => $siswa->nama,
                        'email' => $user->email
                    ]);
                    return redirect('/')->with('success', 'anda berhasil login sebagai siswa');
                }
            }
        }
        
        return redirect('/login')->with('error', 'username atau password anda salah');
    }
}
