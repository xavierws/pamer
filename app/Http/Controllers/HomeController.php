<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Kelas;
use App\KelasDiambil;
use App\BiodataSiswa;
use App\BiodataPengajar;

class HomeController extends Controller
{
    public function tampilkanKelas(Request $request)
    {
        $kelas = Kelas::all();
        return view('kelas', compact('kelas'));
    }

    public function cariKelas(Request $request)
    {
        $search = $request->keyword;
        $kelas = Kelas::where('nama_kelas', 'like', '%' . $search . '%')->get();
        return view('kelas', compact('kelas'));
    }

    public function lihatKelas(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        // if(KelasDiambil::where('siswa_id', '=', Session::get('siswa_id'))->exists() && KelasDiambil::where('kelas_id', '=', $id)->exists()){
        //     $request->session()->flash('sudahDiambil', true);
        // }
        return view('detailKelas', compact('kelas', 'id'));
    }

    public function ambilKelas(Request $request, $id)
    {
        if(KelasDiambil::where('siswa_id', '=', Session::get('siswa_id'))->exists() && KelasDiambil::where('kelas_id', '=', $id)->exists()){
            return redirect()->action('HomeController@lihatKelas', ['id' => $id])->with('error', 'kelas sudah diambil');
        }
        $siswaId = $request->session()->get('siswa_id');
        
        KelasDiambil::create([
            'siswa_id' => $siswaId,
            'kelas_id' => $id,
        ]);

        return redirect()->action('${HomeController@lihatKelas}', ['id' => 'id'])->with('success', 'kelas berhasil diambil');
    }
}
