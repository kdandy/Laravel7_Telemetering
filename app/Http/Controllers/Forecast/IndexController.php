<?php

namespace App\Http\Controllers\Forecast;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Forecast;

class IndexController extends Controller
{

    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
      // Weather Forecast 8 Day
      $FORECAST = HTTP::GET('http://api.openweathermap.org/data/2.5/forecast?q=Malang,id&APPID=bcccbaa299b2e0df1fac63f71d3ccdd5');
      $jsondecode_forecast = json_decode($FORECAST, TRUE);
      $data_forecast = ($jsondecode_forecast['list']);
      
      // Weather Forecast Today
      $FORECAST_TODAY = HTTP::GET('http://api.openweathermap.org/data/2.5/weather?q=Malang,id&appid=bcccbaa299b2e0df1fac63f71d3ccdd5');
      $jsondecode_forecast_today = json_decode($FORECAST_TODAY, TRUE);
      $data_forecast_today = ($jsondecode_forecast_today['weather']);

      // $jml_forecast = sizeof($data_forecast);
      // $jml_arr_forecast = $data_forecast[$jml_forecast-1]['weather'];
      
      // dd($data_forecast);
      // foreach ($data_forecast_today as $item) {
      //   $item['main'];
      // }

      // dd($item);
      return view('pages.forecast.index', compact('data_forecast', 'data_forecast_today'));
    }
}