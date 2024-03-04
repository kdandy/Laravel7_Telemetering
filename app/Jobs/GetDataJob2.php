<?php

namespace App\Jobs;

use App\Models\Node2;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GetDataJob2 extends Job
{

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    { }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {   
        Log::info('running get data job node 2');
        $this->getData();
    }

    
    private function getData() {
        $waktu = HTTP::GET('https://api.thingspeak.com/channels/1552131/fields/1.json');
        $json_waktu = json_decode($waktu, TRUE);
        $data_waktu = ($json_waktu['feeds']);
        $jml_waktu = sizeof($data_waktu)-1;
        $jml_arr_waktu = $data_waktu[$jml_waktu]['created_at'];
        $jml_arr_CO = $data_waktu[$jml_waktu]['field1'];

        // Sensor O3
        $O3 = HTTP::GET('https://api.thingspeak.com/channels/1552131/fields/2.json');
        $json_O3 = json_decode($O3, TRUE);
        $data_O3 = ($json_O3['feeds']);
        $jml_O3 = sizeof($data_O3);
        $jml_arr_O3 = $data_O3[$jml_O3-1]['field2'];
        // $save_O3 = new Tele1;
        // $save_O3->sensor_O3 = $jml_arr_O3;
        // $save_O3->save();
        
        // Sensor H2S
        $H2S = HTTP::GET('https://api.thingspeak.com/channels/1552131/fields/3.json');
        $json_H2S = json_decode($H2S, TRUE);
        $data_H2S = ($json_H2S['feeds']);
        $jml_H2S = sizeof($data_H2S);
        $jml_arr_H2S = $data_H2S[$jml_H2S-1]['field3'];
        // $save_H2S = new Tele1;
        // $save_H2S->sensor_H2S = $jml_arr_H2S;
        // $save_H2S->save();
        
        // Sensor DUST
        $DUST = HTTP::GET('https://api.thingspeak.com/channels/1552131/fields/4.json');
        $json_DUST = json_decode($DUST, TRUE);
        $data_DUST = ($json_DUST['feeds']);
        $jml_DUST = sizeof($data_DUST);
        $jml_arr_DUST = $data_DUST[$jml_DUST-1]['field4'];
        // $save_DUST = new Tele1;
        // $save_DUST->sensor_DUST = $jml_arr_DUST;
        // $save_DUST->save();

        // Sensor NH3
        $NH3 = HTTP::GET('https://api.thingspeak.com/channels/1552131/fields/5.json');
        $json_NH3 = json_decode($NH3, TRUE);
        $data_NH3 = ($json_NH3['feeds']);
        $jml_NH3 = sizeof($data_NH3);
        $jml_arr_NH3 = $data_NH3[$jml_NH3-1]['field5'];
        // $save_NH3 = new Tele1;
        // $save_NH3->sensor_NH3 = $jml_arr_NH3;
        // $save_NH3->save();

        // Sensor NO2
        $NO2 = HTTP::GET('https://api.thingspeak.com/channels/1552131/fields/6.json');
        $json_NO2 = json_decode($NO2, TRUE);
        $data_NO2 = ($json_NO2['feeds']);
        $jml_NO2 = sizeof($data_NO2);
        $jml_arr_NO2 = $data_NO2[$jml_NO2-1]['field6'];
        // $save_DUST = new Tele1;
        // $save_DUST->sensor_DUST = $jml_arr_DUST;
        // $save_DUST->save();

        // ---------------> Cuaca
        // Sensor TEMPERATURE
        $TEMPERATURE = HTTP::GET('https://api.thingspeak.com/channels/1552125/fields/1.json');
        $json_TEMPERATURE = json_decode($TEMPERATURE, TRUE);
        $data_TEMPERATURE = ($json_TEMPERATURE['feeds']);
        $jml_TEMPERATURE = sizeof($data_TEMPERATURE);
        $jml_arr_TEMPERATURE = $data_TEMPERATURE[$jml_TEMPERATURE-1]['field1'];

        // Sensor HUMIDITY
        $HUMIDITY = HTTP::GET('https://api.thingspeak.com/channels/1552125/fields/2.json');
        $json_HUMIDITY = json_decode($HUMIDITY, TRUE);
        $data_HUMIDITY = ($json_HUMIDITY['feeds']);
        $jml_HUMIDITY = sizeof($data_HUMIDITY);
        $jml_arr_HUMIDITY = $data_HUMIDITY[$jml_HUMIDITY-1]['field2'];

        // Sensor PRESSURE
        $PRESSURE = HTTP::GET('https://api.thingspeak.com/channels/1552125/fields/3.json');
        $json_PPRESSURE = json_decode($PRESSURE, TRUE);
        $data_PRESSURE = ($json_PPRESSURE['feeds']);
        $jml_PRESSURE = sizeof($data_PRESSURE);
        $jml_arr_PRESSURE = $data_PRESSURE[$jml_PRESSURE-1]['field3'];
        // $save_PRESSURE = new Tele1;
        // $save_PRESSURE->sensor_PRESSURE = $jml_arr_PRESSURE;
        // $save_PRESSURE->save();

        // Sensor RAIN
        $RAIN = HTTP::GET('https://api.thingspeak.com/channels/1552125/fields/4.json');
        $json_RAIN = json_decode($RAIN, TRUE);
        $data_RAIN = ($json_RAIN['feeds']);
        $jml_RAIN = sizeof($data_RAIN);
        $jml_arr_RAIN = $data_RAIN[$jml_RAIN-1]['field4'];

        // ---------------> Angin
        // Sensor WIND SPEED
        $WIND_SPEED = HTTP::GET('https://api.thingspeak.com/channels/1552083/fields/1.json');
        $json_WIND_SPEED = json_decode($WIND_SPEED, TRUE);
        $data_WIND_SPEED = ($json_WIND_SPEED['feeds']);
        $jml_WIND_SPEED = sizeof($data_WIND_SPEED);
        $jml_arr_WIND_SPEED = $data_WIND_SPEED[$jml_WIND_SPEED-1]['field1'];

        // Sensor WIND DIRECT
        $WIND_DIRECT = HTTP::GET('https://api.thingspeak.com/channels/1552083/fields/2.json');
        $json_WIND_DIRECT = json_decode($WIND_DIRECT, TRUE);
        $data_WIND_DIRECT = ($json_WIND_DIRECT['feeds']);
        $jml_WIND_DIRECT = sizeof($data_WIND_DIRECT);
        $jml_arr_WIND_DIRECT = $data_WIND_DIRECT[$jml_WIND_DIRECT-1]['field2'];
        

        $save_sensor = new Node2;
        $save_sensor->waktu = date('Y-m-d H:i:s', strtotime($jml_arr_waktu));
        $save_sensor->sensor_CO = floatval($jml_arr_CO);
        $save_sensor->sensor_O3 = floatval($jml_arr_O3);
        $save_sensor->sensor_H2S = floatval($jml_arr_H2S);
        $save_sensor->sensor_DUST = floatval($jml_arr_DUST);
        $save_sensor->sensor_NH3 = floatval($jml_arr_NH3);
        $save_sensor->sensor_NO2 = floatval($jml_arr_NO2);
        $save_sensor->sensor_TEMPERATURE = floatval($jml_arr_TEMPERATURE);
        $save_sensor->sensor_HUMIDITY = floatval($jml_arr_HUMIDITY);
        $save_sensor->sensor_PRESSURE = floatval($jml_arr_PRESSURE);
        $save_sensor->sensor_RAIN = floatval($jml_arr_RAIN);
        $save_sensor->sensor_WIND_SPEED = floatval($jml_arr_WIND_SPEED);
        $save_sensor->sensor_WIND_DIRECT = floatval($jml_arr_WIND_DIRECT);
        $save_sensor->save();
    }
}