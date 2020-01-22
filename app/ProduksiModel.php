<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProduksiModel extends Model
{
    protected $table = 'produksis';
    protected $fillable = array('nama_ikan','jumlah_ikan','panjang_ikan','tanggal_cuci','tanggal_tebar','tanggal_pindah','status_panen','user_penginput','id_keramba');
}
