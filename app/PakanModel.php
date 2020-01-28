<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PakanModel extends Model
{
    protected $table = 'pakan';
    protected $fillable = array('sinyal_pakan','baterai_pakan','jenis_pakan','durasi_pakan','pemberian_terakhir','keramba_id');
}
