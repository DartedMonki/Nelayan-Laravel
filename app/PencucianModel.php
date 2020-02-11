<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PencucianModel extends Model
{
    protected $table = 'pencucian';
    protected $fillable = array('jumlah_ikan','panjang_ikan','tanggal_cuci','user_id','keramba_id','produksi_id');
}
