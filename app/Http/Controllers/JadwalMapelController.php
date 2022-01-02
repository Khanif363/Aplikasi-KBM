<?php

namespace App\Http\Controllers;

use App\Models\Hari;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Waktu;
use App\Models\Jadwal;
// use Barryvdh\DomPDF\PDF;
// use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Peraturan;
use Illuminate\Http\Request;

class JadwalMapelController extends Controller
{

    public function mapel()
    {
        // $mapel = User::with('mapel')->get();
        $jadwal1 = Jadwal::where('kelas_id','1')->distinct()->get();
        $jadwal2 = Jadwal::where('kelas_id','2')->get();
        $jadwal3 = Jadwal::where('kelas_id','3')->get();
        return view('daftar-mapel.daftar-mapel', compact('jadwal1','jadwal2','jadwal3'));
    }

    // public function tambah()
    // {
    //     $kelas = Kelas::all();
    //     $mapel = Mapel::all();
    //     $user = User::all();
    //     return view ('daftar-mapel.tambah-mapel', compact('kelas','mapel','user'));
    // }


    public function delete()
    {
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        $user = User::all();
        return view('daftar-mapel.delete-mapel', compact('kelas','mapel','user'));
    }

    public function deleteMapel($user_id,$kelas_id,$mapel)
    {
        // [
        //     $request->mapel,
        //     $request->guru,
        //     $request->kelas,
        // ];

        User::findOrFail('user_id',$user_id);
        Kelas::findOrFail('kelas_id', $kelas_id);
        $mapel = Mapel::findOrFail('mapel',$mapel);
        $produk->delete();       
        return redirect()->route('mapel');
    }


    public function jadwal1SMP()
    {
        // Guru::find($id);
        // $waktu = Waktu::all();
        $jadwal = Jadwal::where('kelas_id','1')->get();
        return view('jadwal-pelajaran.kelas1smp', compact( 'jadwal'));

        
    }

    public function jadwal2SMP()
    {
        $jadwal = Jadwal::where('kelas_id','2')->get();
        return view('jadwal-pelajaran.kelas2smp', compact('jadwal'));
    }

    public function jadwal3SMP()
    {
        $jadwal = Jadwal::where('kelas_id','3')->get();
        return view('jadwal-pelajaran.kelas3smp', compact('jadwal'));
    }

    public function tambahJadwal()
    {
        // $jadwal = Jadwal::all();
        $user = User::where('role','Guru')->get();
        $waktu = Waktu::all();
        $kelas = Kelas::all();
        $hari = Hari::all();
        return view('jadwal-pelajaran.tambah-jadwal',compact('user','waktu','kelas','hari'));
    }

    public function buat(Request $request)
    {
        $pesan = [
            'mapel.required'     => "Mapel tidak boleh kosong!",
            'kelas.required'     => "Kelas tidak boleh kosong!",
            'waktu.required'     => "Waktu tidak boleh kosong!",
            'hari.required'      => "Hari tidak boleh kosong!",
        ];
        $request->validate([
            'mapel'           => 'required',
            'kelas'          => 'required',
            'waktu'          => 'required',
            'hari'           => 'required',
        ],$pesan);
        Jadwal::create([
            'user_id'     => $request->mapel,
            'kelas_id'    => $request->kelas,
            'waktu_id'    => $request->waktu,
            'hari_id'    => $request->hari,
        ]);
        if($request->kelas == '1'){
            return redirect()->route('jadwal1smp')->with('Success',"Jadwal berhasil ditambahkan!");
        }
        if($request->kelas == '2'){
            return redirect()->route('jadwal2smp')->with('Success',"Jadwal berhasil ditambahkan!");
        }
        if($request->kelas == '3'){
            return redirect()->route('jadwal3smp')->with('Success',"Jadwal berhasil ditambahkan!");
        }
    }

    public function peraturan()
    {
        $peraturan = Peraturan::all();
        return view('peraturan.peraturan-kbm', compact('peraturan'));
    }

    public function edit($id)
    {
        $peraturan = Peraturan::find($id);
        return view('peraturan.edit', compact('peraturan'));
    }

    public function editPeraturan(Request $request, $id)
    {
        $pesan = [
            'peraturan.required' => "Peraturan Harus diisi!"
        ];
        $request->validate([
            'peraturan'      => 'required',
        ],$pesan);
        $peraturan = Peraturan::where('id', $id)->first();    
            $peraturan->update([
                'peraturan'     => $request->peraturan
            ]);
            return redirect()->route('peraturan')->with('Success', 'Peraturan berhasil diedit!');
    }

    public function cetak_pdf()
    {
    
        $peraturan = Peraturan::all();
        
        $pdf = \PDF::loadview('peraturan_pdf',['peraturan'=>$peraturan]);
        return $pdf->download('peraturan-siswa-pdf');
    }


}
