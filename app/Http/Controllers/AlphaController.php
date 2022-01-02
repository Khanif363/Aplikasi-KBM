<?php

namespace App\Http\Controllers;

use App\Models\Hari;
use App\Models\User;
use App\Models\Alpha;
use App\Models\Kelas;
use App\Models\Tanggal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlphaController extends Controller
{
    public function alpha1SMP()
    {
        $tanggal = Tanggal::find(1);
        $alpha = Alpha::all();
        $kelas = Kelas::find(1);

            return view('daftar-alpha.alpha1smp',compact('alpha', 'tanggal','kelas'));

        
    }

    public function alpha2SMP()
    {
        $tanggal = Tanggal::find(1);
        $alpha = Alpha::all();
        $kelas = Kelas::find(1);

            return view('daftar-alpha.alpha2smp',compact('alpha', 'tanggal','kelas'));

        
    }

    public function alpha3SMP()
    {
        $tanggal = Tanggal::find(1);
        $alpha = Alpha::all();
        $kelas = Kelas::find(1);

            return view('daftar-alpha.alpha3smp',compact('alpha', 'tanggal','kelas'));

        
    }

    public function tambahAlpha()
    {
        if(Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru'){
        $user = User::where('role','Siswa')->get();
        $hari = Hari::all();
        
        return view('daftar-alpha.tambah-alpha', compact('user', 'hari'));
        }
        else
        {
            return view('error');
        }
    }


    public function tambah(Request $request)
    {
        $pesan = [
            'name.required'         => "Nama tidak boleh kosong!",
            'hari.required'         => "Hari tidak boleh kosong!",
            'keterangan.required'   => "Keterangan tidak boleh kosong!",
        ];
        $request->validate([
            'name'              => 'required',
            'hari'              => 'required',
            'keterangan'        => 'required',
        ],$pesan);
        Alpha::create([
            'user_id'    => $request->name,
            'hari_id'     => $request->hari,
            'tanggal_id' => 1,
            'keterangan' => $request->keterangan,
        ]);
        
        return redirect()->back()->with('Success', "Daftar alpha berhasil di tambahkan!");
    }
}
