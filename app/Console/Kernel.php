<?php

namespace App\Console;

use App\Console\Commands\ScheduleWorkCommand;
use App\Jobs\GetDataJob;
use App\Jobs\GetDataJob2;
use App\Jobs\GetDataJob3;
use App\Models\Node1;
use App\Models\Node2;
use App\Models\Node3;
use App\Models\Tele1History;
use App\Models\Tele2History;
use App\Models\Tele3History;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        ScheduleWorkCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->call(function(){
        //     // Log::info("Run Copy");
        //     $newDataJob = new GetDataJob;
        //     $newDataJob->handle();
        // })->dailyAt('00:00')->timezone("Asia/Jakarta"); // CRON

        // $schedule->call(function(){
        //     // Log::info("Run Copy");
        //     $newDataJob = new GetDataJob;
        //     $newDataJob->handle();
        // })->dailyAt('06:00')->timezone("Asia/Jakarta"); // CRON
        
        // $schedule->call(function(){
        //     // Log::info("Run Copy");
        //     $newDataJob = new GetDataJob;
        //     $newDataJob->handle();
        // })->dailyAt('12:00')->timezone("Asia/Jakarta"); // CRON
        
        // $schedule->call(function(){
        //     // Log::info("Run Copy");
        //     $newDataJob = new GetDataJob;
        //     $newDataJob->handle();
        // })->dailyAt('18:00')->timezone("Asia/Jakarta"); // CRON
        
// Node 1
    // -----> Insert Data
        $schedule->call(function(){
            // Log::info("Run Copy");
            $newDataJob = new GetDataJob;
            $newDataJob->handle();
        })->everySixHours()->timezone("Asia/Jakarta"); // CRON
        
    // -----> Backup and Truncate
        $schedule->call(function(){
            // Log::info("Run Copy");
            // $newDataJob = new GetDataJob;
            // $newDataJob->handle();
            $history1 = Node1::all();
            foreach ($history1 as $data) {
                $save_history = new Tele1History;
                $save_history->waktu = date('Y-m-d H:i:s', strtotime($data->waktu));
                $save_history->sensor_CO = $data->sensor_CO;
                $save_history->sensor_O3 = $data->sensor_O3;
                $save_history->sensor_H2S = $data->sensor_H2S;
                $save_history->sensor_DUST = $data->sensor_DUST;
                $save_history->sensor_NH3 = $data->sensor_NH3;
                $save_history->sensor_NO2 = $data->sensor_NO2;
                $save_history->sensor_TEMPERATURE = $data->sensor_TEMPERATURE;
                $save_history->sensor_HUMIDITY = $data->sensor_HUMIDITY;
                $save_history->sensor_PRESSURE = $data->sensor_PRESSURE;
                $save_history->sensor_RAIN = $data->sensor_RAIN;
                $save_history->sensor_WIND_SPEED = $data->sensor_WIND_SPEED;
                $save_history->sensor_WIND_DIRECT = $data->sensor_WIND_DIRECT;
                $save_history->save();
            }
            Node1::query()->truncate();
        })->monthly()->timezone("Asia/Jakarta"); // CRON


// Node 2
    // -----> Insert Data
        $schedule->call(function(){
            // Log::info("Run Copy");
            $newDataJob = new GetDataJob2;
            $newDataJob->handle();
        })->everySixHours()->timezone("Asia/Jakarta"); // CRON

    // -----> Backup and Truncate
        $schedule->call(function(){
            // Log::info("Run Copy");
            // $newDataJob = new GetDataJob;
            // $newDataJob->handle();
            $history2 = Node2::all();
            foreach ($history2 as $data) {
                $save_history = new Tele2History;
                $save_history->waktu = date('Y-m-d H:i:s', strtotime($data->waktu));
                $save_history->sensor_CO = $data->sensor_CO;
                $save_history->sensor_O3 = $data->sensor_O3;
                $save_history->sensor_H2S = $data->sensor_H2S;
                $save_history->sensor_DUST = $data->sensor_DUST;
                $save_history->sensor_NH3 = $data->sensor_NH3;
                $save_history->sensor_NO2 = $data->sensor_NO2;
                $save_history->sensor_TEMPERATURE = $data->sensor_TEMPERATURE;
                $save_history->sensor_HUMIDITY = $data->sensor_HUMIDITY;
                $save_history->sensor_PRESSURE = $data->sensor_PRESSURE;
                $save_history->sensor_RAIN = $data->sensor_RAIN;
                $save_history->sensor_WIND_SPEED = $data->sensor_WIND_SPEED;
                $save_history->sensor_WIND_DIRECT = $data->sensor_WIND_DIRECT;
                $save_history->save();
            }
            Node2::query()->truncate();
        })->monthly()->timezone("Asia/Jakarta"); // CRON


// Node 3
    // -----> Insert Data
        // $schedule->call(function(){
        //     // Log::info("Run Copy");
        //     $newDataJob = new GetDataJob3;
        //     $newDataJob->handle();
        // })->everyMinute()->timezone("Asia/Jakarta"); // CRON
        
    // -----> Backup and Truncate
        // $schedule->call(function(){
        //     // Log::info("Run Copy");
        //     // $newDataJob = new GetDataJob;
        //     // $newDataJob->handle();
        //     $history3 = Node3::all();
        //     foreach ($history3 as $data) {
        //         $save_history = new Tele3History;
        //         $save_history->waktu = date('Y-m-d H:i:s', strtotime($data->waktu));
        //         $save_history->sensor_CO = $data->sensor_CO;
        //         $save_history->sensor_O3 = $data->sensor_O3;
        //         $save_history->sensor_H2S = $data->sensor_H2S;
        //         $save_history->sensor_DUST = $data->sensor_DUST;
        //         $save_history->sensor_NH3 = $data->sensor_NH3;
        //         $save_history->sensor_NO2 = $data->sensor_NO2;
        //         $save_history->sensor_TEMPERATURE = $data->sensor_TEMPERATURE;
        //         $save_history->sensor_HUMIDITY = $data->sensor_HUMIDITY;
        //         $save_history->sensor_PRESSURE = $data->sensor_PRESSURE;
        //         $save_history->sensor_RAIN = $data->sensor_RAIN;
        //         $save_history->sensor_WIND_SPEED = $data->sensor_WIND_SPEED;
        //         $save_history->sensor_WIND_DIRECT = $data->sensor_WIND_DIRECT;
        //         $save_history->save();
        //     }
        //     Node3::query()->truncate();
        // })->monthly()->timezone("Asia/Jakarta"); // CRON
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
