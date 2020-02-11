<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PencucianResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'=> $this->id,
            'panjang_ikan'=>$this->panjang_ikan,
            'jumlah_ikan'=>$this->jumlah_ikan,
            'tanggal_cuci'=>$this->tanggal_cuci,
            'keramba_id'=>$this->keramba_id,
            'produksi_id'=>$this->produksi_id,
            'user_id'=>$this->user_id
        ];
    }
    public function with($request){
        return[
            'version'=> '1.0.0',
            'author_url'=> url('http://localhost/nelayan-laravel')
        ];
    }
}
