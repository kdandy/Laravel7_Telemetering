<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Tele2History extends Model
{
  use softDeletes;

  protected $table = "nodes_tele_2";
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