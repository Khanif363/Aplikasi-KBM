<?php

namespace App\Console;

use App\Models\Alpha;
use App\Models\Jadwal;
use App\Models\Message;
use App\Models\Potongan;
use App\Models\Peraturan;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $alpha = Alpha::all();
        // $schedule->call(function () {
        //     $alpha->delete();
        // })->weekly();

        // $potongan = Potongan::all();
        // $schedule->call(function () {
        //     $potongan->delete();
        // })->monthly();

        // $jadwal = Jadwal::all();
        // $schedule->call(function () {
        //     $jadwal->delete();
        // })->monthly();

        // $schedule->call(function () {
        //     DB::table('messages')->delete();
        // })->everyMinute();

        // $peraturan = Peraturan::all();
        // $schedule->call(function () {
        //     $peraturan->delete();
        // })->everyMinute();
        
        $schedule->command('log:cron')
                 ->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
