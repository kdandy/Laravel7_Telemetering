<?php

namespace App\Http\Controllers\Node1;

use App\Http\Controllers\Controller;
use App\Models\Node1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PDF;

class IndexController extends Controller
{
    public function __construct()
    {

    }

//     public function index()
//     {
//         dd(date('Y-m-d H:i:s',strtotime('2021-12-04T07:40:34Z')));
// // data masuk database
//         // $results =  $this->_tele1->getPaginate($request);
        
//         // ---------------> Kualitas Udara
//         // Waktu
//         $waktu = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/1.json?api_key=1S7HYWX3RR862Y0W');
//         $json_waktu = json_decode($waktu, TRUE);
//         $data_waktu = ($json_waktu['feeds']);
//         $jml_waktu = sizeof($data_waktu)-1;
//         $jml_arr_waktu = $data_waktu[$jml_waktu]['created_at'];
//         // dd($jml_waktu);?

//         // Sensor CO
//         $CO = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/1.json?api_key=1S7HYWX3RR862Y0W');
//         $json_CO = json_decode($CO, TRUE);
//         $data_CO = ($json_CO['feeds']);
//         $jml_CO = sizeof($data_CO);
//         $jml_arr_CO = $data_CO[$jml_CO-1]['field1'];
//         // $conv_jml_data = (int)$jml_arr;
//         // dd($data_CO);
//         // $save_CO = new Tele1;
//         // $save_CO->sensor_CO = $jml_arr_CO;
//         // $save_CO->save();

//         // Sensor O3
//         $O3 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/2.json?api_key=1S7HYWX3RR862Y0W');
//         $json_O3 = json_decode($O3, TRUE);
//         $data_O3 = ($json_O3['feeds']);
//         $jml_O3 = sizeof($data_O3);
//         $jml_arr_O3 = $data_O3[$jml_O3-1]['field2'];
//         // $save_O3 = new Tele1;
//         // $save_O3->sensor_O3 = $jml_arr_O3;
//         // $save_O3->save();
        
//         // Sensor H2S
//         $H2S = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/3.json?api_key=1S7HYWX3RR862Y0W');
//         $json_H2S = json_decode($H2S, TRUE);
//         $data_H2S = ($json_H2S['feeds']);
//         $jml_H2S = sizeof($data_H2S);
//         $jml_arr_H2S = $data_H2S[$jml_H2S-1]['field3'];
//         // $save_H2S = new Tele1;
//         // $save_H2S->sensor_H2S = $jml_arr_H2S;
//         // $save_H2S->save();
        
// // SUARAMU ORA KRUNGU

//         // Sensor DUST
//         $DUST = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/4.json?api_key=1S7HYWX3RR862Y0W');
//         $json_DUST = json_decode($DUST, TRUE);
//         $data_DUST = ($json_DUST['feeds']);
//         $jml_DUST = sizeof($data_DUST);
//         $jml_arr_DUST = $data_DUST[$jml_DUST-1]['field4'];
//         // $save_DUST = new Tele1;
//         // $save_DUST->sensor_DUST = $jml_arr_DUST;
//         // $save_DUST->save();

//         // Sensor NH3
//         $NH3 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/5.json?api_key=1S7HYWX3RR862Y0W');
//         $json_NH3 = json_decode($NH3, TRUE);
//         $data_NH3 = ($json_NH3['feeds']);
//         $jml_NH3 = sizeof($data_NH3);
//         $jml_arr_NH3 = $data_NH3[$jml_NH3-1]['field5'];
//         // $save_NH3 = new Tele1;
//         // $save_NH3->sensor_NH3 = $jml_arr_NH3;
//         // $save_NH3->save();

//         // Sensor NO2
//         $NO2 = HTTP::GET('https://api.thingspeak.com/channels/1552290/fields/6.json?api_key=1S7HYWX3RR862Y0W');
//         $json_NO2 = json_decode($NO2, TRUE);
//         $data_NO2 = ($json_NO2['feeds']);
//         $jml_NO2 = sizeof($data_NO2);
//         $jml_arr_NO2 = $data_NO2[$jml_NO2-1]['field6'];
//         // $save_DUST = new Tele1;
//         // $save_DUST->sensor_DUST = $jml_arr_DUST;
//         // $save_DUST->save();

//         // ---------------> Cuaca
//         // Sensor TEMPERATURE
//         $TEMPERATURE = HTTP::GET('https://api.thingspeak.com/channels/1552257/fields/1.json?api_key=KHDHDCSC9XKKXMFT');
//         $json_TEMPERATURE = json_decode($TEMPERATURE, TRUE);
//         $data_TEMPERATURE = ($json_TEMPERATURE['feeds']);
//         $jml_TEMPERATURE = sizeof($data_TEMPERATURE);
//         $jml_arr_TEMPERATURE = $data_TEMPERATURE[$jml_TEMPERATURE-1]['field1'];
//         // $save_TEMPERATURE = new Tele1;
//         // $save_TEMPERATURE->sensor_TEMPERATURE = $jml_arr_TEMPERATURE;
//         // $save_TEMPERATURE->save();

//         // Sensor HUMIDITY
//         $HUMIDITY = HTTP::GET('https://api.thingspeak.com/channels/1552257/fields/2.json?api_key=KHDHDCSC9XKKXMFT');
//         $json_HUMIDITY = json_decode($HUMIDITY, TRUE);
//         $data_HUMIDITY = ($json_HUMIDITY['feeds']);
//         $jml_HUMIDITY = sizeof($data_HUMIDITY);
//         $jml_arr_HUMIDITY = $data_HUMIDITY[$jml_HUMIDITY-1]['field2'];
//         // $save_HUMIDITY = new Tele1;
//         // $save_HUMIDITY->sensor_HUMIDITY = $jml_arr_HUMIDITY;
//         // $save_HUMIDITY->save();

//         // Sensor PRESSURE
//         $PRESSURE = HTTP::GET('https://api.thingspeak.com/channels/1552257/fields/3.json?api_key=KHDHDCSC9XKKXMFT');
//         $json_BME28O = json_decode($PRESSURE, TRUE);
//         $data_PRESSURE = ($json_BME28O['feeds']);
//         $jml_PRESSURE = sizeof($data_PRESSURE);
//         $jml_arr_PRESSURE = $data_PRESSURE[$jml_PRESSURE-1]['field3'];
//         // $save_PRESSURE = new Tele1;
//         // $save_PRESSURE->sensor_PRESSURE = $jml_arr_PRESSURE;
//         // $save_PRESSURE->save();

//         // Sensor RAIN
//         $RAIN = HTTP::GET('https://api.thingspeak.com/channels/1552257/fields/4.json?api_key=KHDHDCSC9XKKXMFT');
//         $json_RAIN = json_decode($RAIN, TRUE);
//         $data_RAIN = ($json_RAIN['feeds']);
//         $jml_RAIN = sizeof($data_RAIN);
//         $jml_arr_RAIN = $data_RAIN[$jml_RAIN-1]['field4'];
//         // $save_RAIN = new Tele1;
//         // $save_RAIN->sensor_RAIN = $jml_arr_RAIN;
//         // $save_RAIN->save();

//         // ---------------> Angin
//         // Sensor WIND SPEED
//         $WIND_SPEED = HTTP::GET('https://api.thingspeak.com/channels/1552255/fields/1.json?api_key=FM35EP4FE99QAXFT');
//         $json_WIND_SPEED = json_decode($WIND_SPEED, TRUE);
//         $data_WIND_SPEED = ($json_WIND_SPEED['feeds']);
//         $jml_WIND_SPEED = sizeof($data_WIND_SPEED);
//         $jml_arr_WIND_SPEED = $data_WIND_SPEED[$jml_WIND_SPEED-1]['field1'];
//         // $save_WIND_SPEED = new Tele1;
//         // $save_WIND_SPEED->sensor_WIND_SPEED = $jml_arr_WIND_SPEED;
//         // $save_WIND_SPEED->save();

//         // Sensor WIND DIRECT
//         $WIND_DIRECT = HTTP::GET('https://api.thingspeak.com/channels/1552255/fields/2.json?api_key=FM35EP4FE99QAXFT');
//         $json_WIND_DIRECT = json_decode($WIND_DIRECT, TRUE);
//         $data_WIND_DIRECT = ($json_WIND_DIRECT['feeds']);
//         $jml_WIND_DIRECT = sizeof($data_WIND_DIRECT);
//         $jml_arr_WIND_DIRECT = $data_WIND_DIRECT[$jml_WIND_DIRECT-1]['field2'];
//         // $save_WIND_DIRECT = new Tele1;
//         // $save_WIND_DIRECT->sensor_WIND_DIRECT = $jml_arr_WIND_DIRECT;
//         // $save_WIND_DIRECT->save();
        

//         $save_sensor = new Tele1;
//         $save_sensor->waktu = $jml_arr_waktu;
//         $save_sensor->sensor_CO = $jml_arr_CO;
//         $save_sensor->sensor_O3 = $jml_arr_O3;
//         $save_sensor->sensor_H2S = $jml_arr_H2S;
//         $save_sensor->sensor_DUST = $jml_arr_DUST;
//         $save_sensor->sensor_NH3 = $jml_arr_NH3;
//         $save_sensor->sensor_NO2 = $jml_arr_NO2;
//         $save_sensor->sensor_TEMPERATURE = $jml_arr_TEMPERATURE;
//         $save_sensor->sensor_HUMIDITY = $jml_arr_HUMIDITY;
//         $save_sensor->sensor_PRESSURE = $jml_arr_PRESSURE;
//         $save_sensor->sensor_RAIN = $jml_arr_RAIN;
//         $save_sensor->sensor_WIND_SPEED = $jml_arr_WIND_SPEED;
//         $save_sensor->sensor_WIND_DIRECT = $jml_arr_WIND_DIRECT;
//         $save_sensor->save();

//         // dd($data_CO);
//         return view("pages.tele1.index", compact(
//             'data_waktu',
//             'jml_arr_waktu',
//             // view MQ-7
//             'data_CO',
//             'jml_arr_CO',
// // tanggal e soale ngga genah ndek kono iku
// // date('Y-m-d H:i:s',strtotime(ambilfieldwaktu));
//             // view MQ-131
//             'data_O3',
//             'jml_arr_O3',
//             // view MQ-136
//             'data_H2S',
//             'jml_arr_H2S',
//             // view DUST
//             'data_NO2',
//             'jml_arr_NO2',
//             // view NH3
//             'data_NH3',
//             'jml_arr_NH3',
//             // view DUST
//             'data_DUST',
//             'jml_arr_DUST',
//             // view TEMPERATURE
//             'data_TEMPERATURE',
//             'jml_arr_TEMPERATURE',
//             // view HUMIDITY
//             'data_HUMIDITY',
//             'jml_arr_HUMIDITY',
//             // view PRESSURE
//             'data_PRESSURE',
//             'jml_arr_PRESSURE',
//             // view RAIN
//             'data_RAIN',
//             'jml_arr_RAIN',
//             // view WIND_SPEED
//             'data_WIND_SPEED',
//             'jml_arr_WIND_SPEED',
//             // view WIND_DIRECT
//             'data_WIND_DIRECT',
//             'jml_arr_WIND_DIRECT'
//         ));
//         // return view('pages.tele1.index')->with('nodes_tele_1', $results);
//     }

    public function index()
    {
        $node1 = Node1::orderBy('id','desc')->limit(50)->get();
        return view("pages.node1.index", compact('node1'));
    }

    public function cetak_pdf()
    {
        $cetak_sensor = Node1::all();
        $pdf = PDF::loadview('pages.node1.cetak_pdf',['Node1'=>$cetak_sensor]);
        return $pdf->download('report-node1.pdf');
    }
}