<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Node3 extends Model
{

  protected $table = "nodes3";
  protected $fillable = [
    'waktu',
    // Kualitas
    'sensor_CO',
    'sensor_O3',
    'sensor_H2S',
    'sensor_DUST',
    'sensor_NH3',
    'sensor_NO2',
    // Cuaca
    'sensor_TEMPERATURE',
    'sensor_HUMIDITY',
    'sensor_PRESSURE',
    'sensor_RAIN',
    // Angin
    'sensor_WIND_SPEED',
    'sensor_WIND_DIRECT'
  ];
}