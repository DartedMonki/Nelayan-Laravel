@extends('layouts.app', ['title' => __('Kelompok')])

@section('content')
    @include('listkelompok.partials.header', ['title' => __('Ikut Kelompok')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Kelompok') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('kelompok.index') }}" class="btn btn-sm btn-primary">{{ __('Batal') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('kelompok.joined') }}" autocomplete="off">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Informasi Kelompok') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    {!! Form::Label('kelompok', 'List Kelompok :') !!}
                                    {!! Form::select('kelompok_id', $kelompok, null, ['class' => 'form-control']) !!}
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