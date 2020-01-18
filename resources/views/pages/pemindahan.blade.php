@extends('layouts.app', ['page' => __('Pemindahan'), 'pageSlug' => 'pemindahan'])

@section('content')
        
        <div class="col-lg-6 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Input Pemindahan</h4>
                </div>
        <form method="post" action="{{ route('pemindahan.input') }}">
          @csrf
          <div class="form-group">    
              <label for="jenis_ikan">Jenis Ikan :</label>
              <input type="text" class="form-control" name="jenis_ikan"/>
          </div>

          <div class="form-group">
              <label for="panjang_ikan_terkini">Panjang Ikan Saat Ini :</label>
              <input type="number" class="form-control" name="panjang_ikan_terkini"/>
          </div>

          <div class="form-group">
              <label for="jumlah_ikan">Jumlah Ikan :</label>
              <input type="number" class="form-control" name="jumlah_ikan"/>
          </div>
          <div class="form-group">
              <label for="lokasi_sebelum">Lokasi Sebelum : </label>
              <input type="text" class="form-control" name="lokasi_sebelum"/>
          </div>
          <div class="form-group">
              <label for="lokasi_setelah">Lokasi Setelah : </label>
              <input type="text" class="form-control" name="lokasi_setelah"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Submit</button>
      	</form>
            </div>
        </div>

@endsection