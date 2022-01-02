<?php

namespace App\Console;

use App\Models\Alpha;
use App\Models\Jadwal;
use App\Models\Message;
use App\Models\Potongan;
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
        $alpha = Alpha::all();
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            $alpha->delete();
        })->weekly();

        $potongan = Potongan::all();
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            $potongan->delete();
        })->monthly();

        $jadwal = Jadwal::all();
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            $jadwal->delete();
        })->monthly();

        $message = Message::all();
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            $message->delete();
        })->daily();
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
