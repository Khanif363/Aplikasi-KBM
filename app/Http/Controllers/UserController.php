<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    

    public function profile1SMP()
    {
        $profile = User::where('kelas_id','1')->get();
        return view('user.profile-1smp', compact('profile'));
    }

    public function profile($id)
    {
        $profile = User::find($id);
        return view('user.profile', compact('profile'));
    }

    public function profilePribadi($name)
    {
        $title = "My Profile";
        $user = User::where('name', $name)->first();
        return view('user.profile-pribadi',[
            'user' => $user,
            'title' => $title,
        ]);
    }

    public function editProfile($name)
    {
        if(Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru'){
        $title = "My Profile";
        $kelas = Kelas::all();
        $user = User::where('name', $name)->first();
        return view('user.edit-profile',[
            'user' => $user,
            'title' => $title,
            'kelas' => $kelas,
        ]);
        }
        else
        {
            return view('error');
        }
    }

    public function edit(Request $request, $name)
    {
        
        if(empty($request->file('image'))){
            $user = User::where('name', $name)->first();       
            $user->update([
                'name'              => $request->name,
                'nisn'          => $request->nisn,
                'tanggal_lahir'      => $request->tanggal_lahir,
                'kelas_id'             => $request->kelas,
                'address'         => $request->address,
                'number_phone'  => $request->number_phone,
                'mapel'         => $request->mapel,
                'pendidikan'    => $request->pendidikan
            ]);
            return redirect()->route('profile',$name)->with('Success', "Berhasil memperbarui profile!");
        }
        else{
            $user = User::where('name', $name)->first(); 
            Storage::delete($user->image); 
            $user->update([
                'name'          => $request->name,
                'nisn'          => $request->nisn,
                'tanggal_lahir'      => $request->tanggal_lahir,
                'kelas_id'          => $request->kelas,
                'address'         => $request->address,
                'number_phone'  => $request->number_phone,
                'mapel'         => $request->mapel,
                'pendidikan'    => $request->pendidikan,
                'image'         => $request->file('image')->with('Success', "Berhasil memperbarui profile!"),
            ]);
            return redirect()->route('profile',$name);
        }

    }

    public function profile2SMP()
    {
        $profile = User::where('kelas_id','2')->get();
        return view('user.profile-2smp', compact('profile'));
    }

    public function profile3SMP()
    {
        $profile = User::where('kelas_id','3')->get();
        return view('user.profile-3smp', compact('profile'));
    }

    public function demo()
    {
        $jumlahsiswa = User::where('role','Siswa')->count();
        $jumlahguru = User::where('role','Guru')->count();
        $jumlahadmin = User::where('role','Admin')->count();
        return view('halaman', compact('jumlahsiswa','jumlahguru','jumlahadmin'));
    }

    public function tambahUser()
    {
        if(Auth::user()->role  == 'Admin'|Auth::user()->role  == 'Guru'){
        $role = Role::all();
        return view('user.buat-user',compact('role'));
        }
        else
        {
            return view('error');
        }
    }

    public function tambah(Request $request)
    {
        $pesan = [
            'name.required' => "Nama tidak boleh kosong!",
            'email.required' => "Email tidak boleh kosong!",
            'role.required' => "Role tidak boleh kosong!",
            'password.required' => "Password tidak boleh kosong!",
        ];
        $request->validate([
            'name'      => 'required',
            'email'      => 'required',
            'role'      => 'required',
            'password'   => 'required',
        ],$pesan);
        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'role'      => $request->role,
            'password'  => Hash::make($request->password),
        ]);
        return redirect()->back()->with('Success',"Berhasil menambahkan user!");
    }
}
