<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenebaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penebarans', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('jenis_ikan');
            $table->integer('jumlah_ikan');
            $table->integer('panjang_ikan');
            $table->string('lokasi_penebaran');
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
        Schema::dropIfExists('penebarans');
    }
}
