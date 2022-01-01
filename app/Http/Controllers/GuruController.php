<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Potongan;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function potonganGaji()
    {
        $potongan = Potongan::all();
        return view('potongan.potongan-gaji',compact('potongan'));
    }

    public function tambahpotongan()
    {
        $user = User::where('role','Guru')->get();
        return view('potongan.tambah', compact('user'));
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
        return view('evaluasi.evaluasi-guru');
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

}
