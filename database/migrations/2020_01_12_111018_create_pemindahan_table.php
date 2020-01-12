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
        Schema::create('pemindahans', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('jenis_ikan');
            $table->integer('panjang_ikan_terkini');
            $table->integer('jumlah_ikan');
            $table->string('lokasi_sebelum');
            $table->string('lokasi_setelah');
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
        Schema::dropIfExists('pemindahans');
    }
}
