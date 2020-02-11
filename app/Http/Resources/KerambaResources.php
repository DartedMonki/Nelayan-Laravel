<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KerambaResources extends JsonResource
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
            'nama_keramba'=>$this->nama_keramba,
            'panjang_keramba'=>$this->panjang_keramba,
            'lebar_keramba'=>$this->lebar_keramba,
            'kapasitas_keramba'=>$this->kapasitas_keramba,
            'kelompok_id'=>$this->kelompok_id,
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
