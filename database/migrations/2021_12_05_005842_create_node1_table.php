<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNode1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes1', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('waktu')->nullable();
            $table->string('sensor_CO')->nullable();
            $table->string('sensor_O3')->nullable();
            $table->string('sensor_H2S')->nullable();
            $table->string('sensor_DUST')->nullable();
            $table->string('sensor_NH3')->nullable();
            $table->string('sensor_NO2')->nullable();
            
            $table->string('sensor_TEMPERATURE')->nullable();
            $table->string('sensor_HUMIDITY')->nullable();
            $table->string('sensor_PRESSURE')->nullable();
            $table->string('sensor_RAIN')->nullable();
            
            $table->string('sensor_WIND_SPEED')->nullable();
            $table->string('sensor_WIND_DIRECT')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodes1');
    }
}
