@extends('layouts.app', ['page' => __('Penebaran'), 'pageSlug' => 'penebaran'])

@section('content')
        
        <div class="col-lg-6 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Input Penebaran</h4>
                </div>
        <form method="post" action="{{ route('penebaran.input') }}">
          @csrf
          <div class="form-group">    
              <label for="jenis_ikan">Jenis Ikan :</label>
              <input type="text" class="form-control" name="jenis_ikan"/>
          </div>

          <div class="form-group">
              <label for="jumlah_ikan">Jumlah Ikan :</label>
              <input type="number" class="form-control" name="jumlah_ikan"/>
          </div>

          <div class="form-group">
              <label for="panjang_ikan">Panjang Ikan :</label>
              <input type="number" class="form-control" name="panjang_ikan"/>
          </div>
          <div class="form-group">
              <label for="lokasi_penebaran">Lokasi Penebaran : </label>
              <input type="text" class="form-control" name="lokasi_penebaran"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Submit</button>
      	</form>
            </div>
        </div>

@endsection