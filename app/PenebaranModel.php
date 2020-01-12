<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenebaranModel extends Model
{
    protected $table = 'penebarans';
    protected $fillable = array('jenis_ikan','jumlah_ikan','panjang_ikan','lokasi_penebaran');
}
