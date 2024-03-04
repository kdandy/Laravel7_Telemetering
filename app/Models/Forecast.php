<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Forecast extends Model
{
  use softDeletes;

  // protected $table = "weather_tele_1";
  protected $fillable = [
    // Forecast
    'FORECAST'
  ];
}