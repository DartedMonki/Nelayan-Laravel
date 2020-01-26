<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProduksiModel extends Model
{
    protected $table = 'produksi';
    protected $fillable = array('nama_ikan','jumlah_ikan','panjang_ikan','tanggal_cuci','tanggal_tebar','tanggal_pindah','status_panen','id_user','id_keramba');
    protected $dates = ['tanggal_cuci','tanggal_tebar','tanggal_pindah','tanggal_panen'];
}
