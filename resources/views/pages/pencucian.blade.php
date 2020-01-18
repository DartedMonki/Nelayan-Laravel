@extends('layouts.app', ['page' => __('Pencucian'), 'pageSlug' => 'pencucian'])

@section('content')
        
        <div class="col-lg-6 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Input Pencucian</h4>
                </div>
        <form method="post" action="{{ route('pencucian.input') }}">
          @csrf
          <div class="form-group">    
              <label for="jenis_ikan">Jenis Ikan :</label>
              <input type="text" class="form-control" name="jenis_ikan"/>
          </div>

          <div class="form-group">
              <label for="lokasi_keramba">Lokasi Keramba :</label>
              <input type="text" class="form-control" name="lokasi_keramba"/>
          </div>

          <div class="form-group">
              <label for="terakhir_mencuci">Terakhir Mencuci :</label>
              <input type="text" class="form-control" name="terakhir_mencuci"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Submit</button>
      	</form>
            </div>
        </div>

@endsection