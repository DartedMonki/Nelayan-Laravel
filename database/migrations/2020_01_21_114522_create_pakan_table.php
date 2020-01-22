<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakans', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('sinyal_pakan');
            $table->string('baterai_pakan');
            $table->string('jenis_pakan');
            $table->string('durasi_pakan');
            $table->string('pemberian_terakhir');
            $table->integer('id_keramba')->unsigned();
            $table->foreign('id_keramba')->references('id')->on('kerambas');
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
        Schema::dropIfExists('pakans');
    }
}
