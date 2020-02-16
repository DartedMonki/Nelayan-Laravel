@extends('layouts.app', ['title' => __('Manajemen Kelompok')])

@section('content')
    @include('users.partials.header', ['title' => __('Edit Kelompok')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Manajemen Kelompok') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('listkelompok.index') }}" class="btn btn-sm btn-primary">{{ __('Batal') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('listkelompok.update', $kelompok->id) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Informasi Kelompok') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('nama_kelompok') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-nama-kel">{{ __('Nama Kelompok') }}</label>
                                    <input type="text" name="nama_kelompok" id="input-nama-kel" class="form-control form-control-alternative{{ $errors->has('nama_kelompok') ? ' is-invalid' : '' }}" placeholder="{{ __('Nama Kelompok') }}" value="{{ old('nama_kelompok', $kelompok->nama_kelompok) }}" required autofocus>

                                    @if ($errors->has('nama_kelompok'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nama_kelompok') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('ketua_kelompok') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-ketua-kel">{{ __('Ketua Kelompok') }}</label>
                                    <input type="text" name="ketua_kelompok" id="input-ketua-kel" class="form-control form-control-alternative{{ $errors->has('ketua_kelompok') ? ' is-invalid' : '' }}" placeholder="{{ __('Ketua Kelompok') }}" value="{{ old('ketua_kelompok', $kelompok->ketua_kelompok) }}" required>

                                    @if ($errors->has('ketua_kelompok'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ketua_kelompok') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('bendahara_kelompok') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-bendahara-kel">{{ __('Bendahara Kelompok') }}</label>
                                    <input type="text" name="bendahara_kelompok" id="input-bendahara-kel" class="form-control form-control-alternative{{ $errors->has('bendahara_kelompok') ? ' is-invalid' : '' }}" placeholder="{{ __('Bendahara Kelompok') }}" value="{{ old('bendahara_kelompok', $kelompok->bendahara_kelompok) }}" required>

                                    @if ($errors->has('bendahara_kelompok'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('bendahara_kelompok') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('humas_kelompok') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-humas-kel">{{ __('Humas Kelompok') }}</label>
                                    <input type="text" name="humas_kelompok" id="input-humas-kel" class="form-control form-control-alternative{{ $errors->has('humas_kelompok') ? ' is-invalid' : '' }}" placeholder="{{ __('Humas Kelompok') }}" value="{{ old('humas_kelompok', $kelompok->humas_kelompok) }}" required>

                                    @if ($errors->has('humas_kelompok'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('humas_kelompok') }}</strong>
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