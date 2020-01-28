<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensor', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('sinyal_sensor');
            $table->string('baterai_sensor');
            $table->string('suhu_air');
            $table->string('kecepatan_angin');
            $table->string('kelembaban_udara');
            $table->string('curah_hujan');
            $table->string('kecepatan_arus');
            $table->integer('keramba_id')->unsigned();
            $table->foreign('keramba_id')->references('id')->on('keramba');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensor');
    }
}
