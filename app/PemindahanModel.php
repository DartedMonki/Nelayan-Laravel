<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemindahanModel extends Model
{
    protected $table = 'pemindahans';
    protected $fillable = array('jenis_ikan','panjang_ikan_terkini','jumlah_ikan','lokasi_sebelum','lokasi_setelah');
}
