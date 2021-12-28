<?php

namespace Database\Seeders;

use App\Models\Hari;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Tanggal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::create([
        //     'name'      => 'Admin',
        //     'email'     => 'testinglaravel18@gmail.com',
        //     'password'  => Hash::make('1234'),
        //     'role'      => 'Admin'
        // ]);
        // $user = User::where('id','1')->first();
        // $user->update([
        //     'name'      => 'Khanif',
        // ]);
        // Tanggal::create([
        //     'tanggal_awal'      => '2021-12-20',
        //     'tanggal_akhir'     => '2021-12-26'
        // ]);


        $Tanggal = Tanggal::where('id','2');
        $Tanggal->delete();


    }
}
