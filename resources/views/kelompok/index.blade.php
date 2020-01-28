@extends('layouts.app', ['title' => __('Kelompok')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Selamat Datang') . ' '. auth()->user()->name,
        'description' => __('Berikut merupakan halaman kelompok. Anda dapat mengatur kelompok Anda disini.'),
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <!-- <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-info mr-4">{{ __('Connect') }}</a>
                            <a href="#" class="btn btn-sm btn-default float-right">{{ __('Message') }}</a>
                        </div> -->
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <!-- <div>
                                        <span class="heading">22</span>
                                        <span class="description">{{ __('Friends') }}</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">{{ __('Photos') }}</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">{{ __('Comments') }}</span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3> {{ auth()->user()->name }} </h3>
                            <div>
                                <i class="ni education_hat mr-2"></i>
                                @if (auth()->user()->status == 'admin')
                                {{ __('Admin') }}
                                @elseif (auth()->user()->status == 'ketua')
                                {{ __('Ketua Kelompok') }}
                                @else 
                                {{ __('Pembudidaya') }}
                                @endif
                            </div>
                            <!-- <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{ __('Solution Manager - Creative Tim Officer') }}
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>{{ __('University of Computer Science') }}
                            </div>
                            <hr class="my-4" />
                            <p>{{ __('Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.') }}</p>
                            <a href="#">{{ __('Show more') }}</a> -->
                        </div>
                    </div>
                </div>
            </div>
            @if (auth()->user()->kelompok_id != NULL)
                @if (auth()->user()->status == 'user')
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <h3 class="col-12 mb-0">{{ __('Kelompok') }}</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="col-12 mb-0">{{ __('Anda Tergabung Dalam Kelompok') }}</h3>
                            <h2 class="col-12 mb-0 mt-4 text-center">{{ $kelompok->nama_kelompok }}</h2>
                            <div class="text-center">
                                <a href="{{ route('kelompok.join') }}" class="btn btn-success mt-4">{{ __('Ubah Kelompok') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                @else
                <div class="col-xl-8 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <h3 class="col-12 mb-0">{{ __('Edit Kelompok') }}</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('kelompok.update') }}" autocomplete="off">
                                @csrf
                                @method('put')

                                <h6 class="heading-small text-muted mb-4">{{ __('Informasi Kelompok') }}</h6>
                                
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

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
                                        <input type="text" name="ketua_kelompok" id="input-ketua-kel" class="form-control form-control-alternative{{ $errors->has('ketua_kelompok') ? ' is-invalid' : '' }}" placeholder="{{ __('Ketua Kelompok') }}" value="{{ old('ketua_kelompok', $kelompok->ketua_kelompok) }}" disabled>

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
                @endif
            @else 
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Anda Belum Memiliki Kelompok') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (auth()->user()->status == 'user')
                        <div class="text-center">
                            <a href="{{ route('kelompok.join') }}" class="btn btn-success">{{ __('Ikut Kelompok') }}</a>
                        </div>
                        @else
                        <div class="text-center">
                            <a href="{{ route('kelompok.create') }}" class="btn btn-success">{{ __('Buat Kelompok') }}</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endif
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection