<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class ChartJsController extends Controller
{
    public function index()
    {
        $user = Role::all();
        $datasiswa = User::where('role','Siswa')->count();
        $dataguru = User::where('role','Guru')->count();
        $dataadmin = User::where('role','Admin')->count();
        $role = [];
        $siswa = [];
        $guru = [];
        $admin = [];
        foreach($user as $users){
        $role[] = $users->role;
    }
        $siswa[] = $datasiswa;
        $guru[] = $dataguru;
        $admin[] = $dataadmin;
    
    // dd($jumlah);
        return view('landing.index', compact('role','siswa','guru','admin'));
    }
}
