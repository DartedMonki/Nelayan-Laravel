@extends('layouts.app', ['title' => __('Produksi')])

@section('content')
    @include('listkelompok.partials.header', ['title' => __('Penebaran')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Penebaran') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('produksi.index') }}" class="btn btn-sm btn-primary">{{ __('Batal') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('produksi.tebar') }}">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Informasi Budi Daya') }}</h6>
                            <div class="pl-lg-4">
                                <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                                <div class="form-group{{ $errors->has('nama_ikan') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-nama-ikan">{{ __('Nama Ikan') }}</label>
                                    <input type="text" name="nama_ikan" id="input-nama-ikan" class="form-control form-control-alternative{{ $errors->has('nama_ikan') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama Ikan') }}" value="{{ old('nama_ikan') }}" required autofocus>

                                    @if ($errors->has('nama_ikan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nama_ikan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('panjang_ikan') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-panjang-ikan">{{ __('Panjang Ikan (cm)') }}</label>
                                    <input type="number" name="panjang_ikan" id="input-panjang-ikan" class="form-control form-control-alternative{{ $errors->has('panjang_ikan') ? ' is-invalid' : '' }}" placeholder="{{ __('Panjang Ikan (cm)') }}" value="{{ old('panjang_ikan') }}" required>

                                    @if ($errors->has('panjang_ikan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('panjang_ikan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('jumlah_ikan') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-jumlah-ikan">{{ __('Jumlah Ikan') }}</label>
                                    <input type="number" name="jumlah_ikan" id="input-jumlah-ikan" class="form-control form-control-alternative{{ $errors->has('jumlah_ikan') ? ' is-invalid' : '' }}" placeholder="{{ __('Jumlah Ikan') }}" value="{{ old('jumlah_ikan') }}" required>

                                    @if ($errors->has('jumlah_ikan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('jumlah_ikan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('tanggal_tebar') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-tgl-tebar">{{ __('Tanggal Tebar') }}</label>
                                    <input type="date" name="tanggal_tebar" id="input-tgl-tebar" class="form-control form-control-alternative{{ $errors->has('tanggal_tebar') ? ' is-invalid' : '' }}" placeholder="{{ __('Tanggal Tebar') }}" value="{{ old('tanggal_tebar') }}" required>

                                    @if ($errors->has('tanggal_tebar'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tanggal_tebar') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-keramb">{{ __('Lokasi Keramba') }}</label>
                                    <select type="number" name="id_keramba" id="input-keramba" class="form-control form-control-alternative{{ $errors->has('id_keramba') ? ' is-invalid' : '' }}" placeholder="{{ __('Lokasi Keramba') }}">
                                        <option value='1'>Keramba 1</option>
                                        <option value='2'>Keramba 2</option>  
                                    </select>

                                    @if ($errors->has('id_keramba'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('id_keramba') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Simpan') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection