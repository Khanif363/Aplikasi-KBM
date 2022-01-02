<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Evaluasi;
use App\Models\Potongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function potonganGaji()
    {
        $potongan = Potongan::all();
        return view('potongan.potongan-gaji',compact('potongan'));
    }

    public function tambahpotongan()
    {
        if(Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru'){
            $user = User::where('role','Guru')->get();
            return view('potongan.tambah', compact('user'));
        }
        else
        {
            return view('error');
        }
        
    }

    public function potong(Request $request)
    {
        $pesan = [
            'name.required'     => "Nama tidak boleh kosong!",
            'gaji.required'     => "Gaji tidak boleh kosong!",
            'potongan.required' => "Potongan tidak boleh kosong!"
        ];
        $request->validate([
            'name'      => 'required',
            'gaji'      => 'required',
            'potongan'  => 'required'
        ],$pesan);
        Potongan::create([
            'user_id'   => $request->name,
            'gaji'      => $request->gaji,
            'potongan'  => $request->potongan,
        ]);
        return redirect()->route('potongan')->with('Success',"Data berhasil ditambahkan!");

    }

    public function evaluasi()
    {
        $evaluasi = Evaluasi::all();
        return view('evaluasi.evaluasi-guru', compact('evaluasi'));
    }

    public function terima1SMP()
    {
        $pesan = Message::where('kelas','1 SMP')->get();
        return view('pesan-guru.1smp', compact('pesan'));
    }

    public function terima2SMP()
    {
        $pesan = Message::where('kelas','2 SMP')->get();
        return view('pesan-guru.2smp', compact('pesan'));
    }

    public function terima3SMP()
    {
        $pesan = Message::where('kelas','3 SMP')->get();
        return view('pesan-guru.3smp', compact('pesan'));
    }
    public function lihat($id)
    {
        $pesan = Message::find($id);
        return view('pesan-guru.lihat', compact('pesan'));
    }



    public function editEv($id)
    {
        if(Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru'){
        $evaluasi = Evaluasi::find($id);
        return view('evaluasi.edit-evaluasi', compact('evaluasi'));
        }
        else{
            return view('error');
        }
    }

    public function editEvaluasi(Request $request, $id)
    {
        $pesan = [
            'evaluasi.required' => "Jadwal evaluasi Harus diisi!"
        ];
        $request->validate([
            'evaluasi'      => 'required',
        ],$pesan);
        $evaluasi = Evaluasi::where('id', $id)->first();    
            $evaluasi->update([
                'evaluasi'     => $request->evaluasi
            ]);
            return redirect()->route('evaluasi')->with('Success', 'Jadwal evaluasi berhasil diedit!');
    }

}
