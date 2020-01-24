@extends('layouts.app', ['page' => __('Penebaran'), 'pageSlug' => 'penebaran'])

@section('content')
        
        <div class="col-lg-6 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Input Penebaran</h4>
                </div>
        <form method="post" action="{{ route('produksi.input') }}">
          @csrf
          <div class="form-group">    
              <label for="jenis_ikan">Nama Ikan :</label>
              <input type="text" class="form-control" name="nama_ikan"/>
          </div>

          <div class="form-group">
              <label for="jumlah_ikan">Panjang Ikan :</label>
              <input type="number" class="form-control" name="panjang_ikan"/>
          </div>

          <div class="form-group">
              <label for="panjang_ikan">Jumlah Ikan :</label>
              <input type="number" class="form-control" name="jumlah_ikan"/>
          </div>
          <div class="form-group">
              <label for="lokasi_penebaran">Tanggal Penebaran : </label>
              <input type="date" class="form-control" name="tanggal_penebaran"/>
          </div>
          <div class="form-group">
              <label for="lokasi_penebaran">Keramba : </label>
              <input type="number" class="form-control" name="id_penebaran"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Submit</button>
      	</form>
            </div>
        </div>

@endsection