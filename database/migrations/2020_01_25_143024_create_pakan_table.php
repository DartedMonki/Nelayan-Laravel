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
        Schema::create('pakan', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('sinyal_pakan');
            $table->string('baterai_pakan');
            $table->string('jenis_pakan');
            $table->string('durasi_pakan');
            $table->string('pemberian_terakhir');
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
        Schema::dropIfExists('pakan');
    }
}
