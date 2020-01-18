@extends('layouts.app', ['page' => __('Panen'), 'pageSlug' => 'panen'])

@section('content')
        
        <div class="col-lg-6 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Input Panen</h4>
                </div>
        <form method="post" action="{{ route('panen.input') }}">
          @csrf
          <div class="form-group">    
              <label for="jenis_ikan">Jenis Ikan :</label>
              <input type="text" class="form-control" name="jenis_ikan"/>
          </div>

          <div class="form-group">
              <label for="panjang_ikan">Panjang Ikan :</label>
              <input type="number" class="form-control" name="panjang_ikan"/>
          </div>

          <div class="form-group">
              <label for="jumlah_ikan">Jumlah Ikan :</label>
              <input type="number" class="form-control" name="jumlah_ikan"/>
          </div>
          <div class="form-group">
              <label for="lokasi_panen">Lokasi Panen : </label>
              <input type="text" class="form-control" name="lokasi_panen"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Submit</button>
      	</form>
            </div>
        </div>

@endsection