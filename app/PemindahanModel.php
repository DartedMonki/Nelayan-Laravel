<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemindahanModel extends Model
{
    protected $table = 'pemindahan';
    protected $fillable = array('jumlah_ikan','panjang_ikan','tanggal_pindah','user_id','keramba_sebelum','keramba_sesudah','produksi_id');
}
