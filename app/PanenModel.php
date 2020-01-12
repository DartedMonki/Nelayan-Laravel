<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PanenModel extends Model
{
    protected $table = 'panens';
    protected $fillable = array('jenis_ikan','panjang_ikan','jumlah_ikan','lokasi_panen');
}
