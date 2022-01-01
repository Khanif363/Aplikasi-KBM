<?php

namespace Database\Seeders;

use App\Models\Hari;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Waktu;
use App\Models\Tanggal;
use App\Models\Peraturan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

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
        // $user = User::where('id','13');
        // $user->update([
        // 'name'      => 'Amir Said Nur Fadilah',
        // ]);

        // $user = User::where('id','12');
        // $user->update([
        // 'name'      => 'Muhammad Basyier',
        // ]);

        // Waktu::create([
        //     'id'        => '1',
        //     'awal'      => '07:15',
        //     'akhir'     => '09:30'
        // ]);
        // Waktu::create([
        //     'id'        => '2',
        //     'awal'      => '10:00',
        //     'akhir'     => '11:45'
        // ]);
        // Waktu::create([
        //     'id'        => '3',
        //     'awal'      => '12:30',
        //     'akhir'     => '14:45'
        // ]);
        // DB::table('jadwals')->delete();

        // Schema::table('jadwals', function(\Illuminate\Database\Schema\Blueprint $table) {
        //     $table->foreignId('user_id')->after('id');
        // });

        Peraturan::create([
            'id'            => '1',
            'peraturan'     => '1. Memberikan sambutan salam kepada guru yang baru memasuki kelas.<br>
            2. Selalu menggunakan seragam dengan benar dan rapi.<br>
            3. Mendengarkan dengan baik apa yang guru sampaikan.<br>
            3. Dilarang meninggalkan kelas sebelum diizinkan oleh guru.<br>
            4. Dilarang merokok,pacaran dan hal-hal sebagainya yang dilarang dalam islam.<br>
            5. Mengerjakan tugas yang diberikan oleh guru tepat pada waktunya.'
        ]);



    }
}
