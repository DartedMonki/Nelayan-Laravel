<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerambaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerambas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama_keramba');
            $table->integer('panjang_keramba');
            $table->integer('lebar_keramba');
            $table->string('kapasitas_keramba');
            $table->integer('id_kelompok')->unsigned();
            $table->foreign('id_kelompok')->references('id')->on('kelompoks');
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
        Schema::dropIfExists('kerambas');
    }
}
