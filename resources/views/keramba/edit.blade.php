@extends('layouts.app', ['title' => __('Keramba')])

@section('content')
    @include('listkelompok.partials.header', ['title' => __('Edit Keramba')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Keramba') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('keramba.index') }}" class="btn btn-sm btn-primary">{{ __('Batal') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('keramba.update', $keramba->id) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Informasi Keramba') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('nama_keramba') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-nama-krb">{{ __('Nama Keramba') }}</label>
                                    <input type="text" name="nama_keramba" id="input-nama-krb" class="form-control form-control-alternative{{ $errors->has('nama_keramba') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama Keramba') }}" value="{{ old('nama_keramba', $keramba->nama_keramba) }}" required autofocus>

                                    @if ($errors->has('nama_keramba'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nama_keramba') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('panjang_keramba') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-pjg-krb">{{ __('Panjang Keramba (meter)') }}</label>
                                    <input type="number" name="panjang_keramba" id="input-pjg-krb" class="form-control form-control-alternative{{ $errors->has('panjang_keramba') ? ' is-invalid' : '' }}" placeholder="{{ __('Panjang Keramba (meter)') }}" value="{{ old('panjang_keramba', $keramba->panjang_keramba) }}" required>

                                    @if ($errors->has('panjang_keramba'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('panjang_keramba') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('lebar_keramba') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-lebar-krb">{{ __('Lebar Keramba (meter)') }}</label>
                                    <input type="number" name="lebar_keramba" id="input-lebar-krb" class="form-control form-control-alternative{{ $errors->has('lebar_keramba') ? ' is-invalid' : '' }}" placeholder="{{ __('Lebar Keramba (meter)') }}" value="{{ old('lebar_keramba', $keramba->lebar_keramba) }}" required>

                                    @if ($errors->has('lebar_keramba'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lebar_keramba') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('kapasitas_keramba') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-kapasitas-krb">{{ __('Kapasitas Keramba') }}</label>
                                    <input type="number" name="kapasitas_keramba" id="input-kapasitas-krb" class="form-control form-control-alternative{{ $errors->has('kapasitas_keramba') ? ' is-invalid' : '' }}" placeholder="{{ __('Maksimum Jumlah Ikan') }}" value="{{ old('kapasitas_keramba', $keramba->kapasitas_keramba) }}" required>

                                    @if ($errors->has('kapasitas_keramba'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('kapasitas_keramba') }}</strong>
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