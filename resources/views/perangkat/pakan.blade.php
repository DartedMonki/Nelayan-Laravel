@extends('layouts.app', ['title' => __('Pakan Otomatis')])

@section('content')
    @include('listkelompok.partials.header', ['title' => __('List Pakan Otomatis')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Pakan Otomatis') }}</h3>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-primary">{{ __('Tambah') }}</a>
                            </div> -->
                        </div>
                    </div>
                    
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                   
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection