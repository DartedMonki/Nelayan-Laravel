<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiKelompokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_kelompok', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kelompok');
            $table->string('ketua_kelompok');
            $table->string('bendahara_kelompok');
            $table->string('humas_kelompok');
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
        Schema::dropIfExists('api_kelompok');
    }
}
