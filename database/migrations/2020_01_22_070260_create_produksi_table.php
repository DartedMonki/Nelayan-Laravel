<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksis', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama_ikan')->nullable();
            $table->integer('jumlah_ikan')->nullable();
            $table->integer('panjang_ikan')->nullable();
            $table->date('tanggal_cuci')->nullable();
            $table->date('tanggal_tebar')->nullable();
            $table->date('tanggal_pindah')->nullable();
            $table->date('tanggal_panen')->nullable();
            $table->string('status_panen')->default('Pembesaran');
            $table->integer('id_keramba')->unsigned();
            $table->foreign('id_keramba')->references('id')->on('kerambas');
            $table->timestamps();
            $table->integer('user_penginput');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produksis');
    }
}
