<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BiodataSiswa;
use App\BiodataPengajar;
use App\KelasDiambil;
use App\Kelas;
use DB;
use Session;

class DashboardController extends Controller
{
    public function siswa(Request $request, $id)
    {
        $siswaId = $request->session()->get('siswa_id');
        $siswa = BiodataSiswa::find($siswaId);
        $kelas = DB::table('kelas_diambils')
        ->join('kelas', 'kelas.id', '=', 'kelas_diambils.kelas_id')
        ->select('kelas.nama_kelas', 'kelas.keterangan', 'kelas_diambils.siswa_id', 'kelas.id', 'kelas.kode_kelas')
        ->where('kelas_diambils.siswa_id', '=', $siswaId)
        ->get();

        return view('dashboardSiswa', compact('siswa', 'kelas', 'id'));
    }

    public function pengajar(Request $request, $id)
    {
        $pengajarId = $request->session()->get('pengajar_id');
        $pengajar = BiodataPengajar::find($pengajarId);
        $kelas = Kelas::where('pengajar_id', '=', $pengajarId)->get();
        
        return view('dashboardPengajar', compact('pengajar', 'kelas', 'id'));
    }

    public function tambahKelas(Request $request)
    {
        $pengajarId = $request->session()->get('pengajar_id');
        Kelas::create([
            'nama_kelas' => $request->input('nama_kelas'),
            'keterangan' => $request->input('keterangan'),
            'pengajar_id' => $pengajarId,
            'kode_kelas' => $request->input('kode_kelas')
        ]);

        return redirect()->back()->with('success', 'kelas berhasil dibuat');
    }

    public function tokenKelas(Request $request)
    {
        $token = $request->input('token');
        $kelas = Kelas::where('kode_kelas', '=', $token)->first();
        if($kelas != null){
            if(KelasDiambil::where('siswa_id', '=', Session::get('siswa_id'))->exists() && KelasDiambil::where('kelas_id', '=', $kelas->id)->exists()){
                return redirect()->action('HomeController@lihatKelas', ['id' => $kelas->id])->with('error', 'kelas sudah diambil');
            }
            $siswaId = $request->session()->get('siswa_id');
            
            KelasDiambil::create([
                'siswa_id' => $siswaId,
                'kelas_id' => $kelas->id,
            ]);
    
            //return redirect()->action('HomeController@lihatKelas', ['id' => 'id'])->with('success', 'kelas berhasil diambil');
            return redirect()->back()->with('success', 'kelas berhasil diambil');
        }

        return redirect()->back()->with('error', 'kelas tidak terdaftar/token salah');
    }
}
