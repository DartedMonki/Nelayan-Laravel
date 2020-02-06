<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemindahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemindahan', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('jumlah_ikan')->nullable();
            $table->integer('panjang_ikan')->nullable();
            $table->date('tanggal_pindah')->nullable();
            $table->integer('keramba_id')->unsigned();
            $table->foreign('keramba_id')->references('id')->on('keramba');
            $table->integer('produksi_id')->unsigned();
            $table->foreign('produksi_id')->references('id')->on('produksi');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemindahan');
    }
}
