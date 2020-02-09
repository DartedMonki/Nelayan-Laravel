@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
                
        <div class="row">
            @foreach ($keramba as $krb)
            <div class="col-xl-6 mb-5 col-lg-6">
                <div class="card shadow card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <a href="{{ route('keramba.index') }}" class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">{{ $krb->nama_keramba }}</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $krb->kapasitas_keramba }}</span>
                            </div>
                            <div class="col-auto">
                                <!-- <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                    <i class="fas fa-chart-bar"></i>
                                </div> -->
                                <h5 class="card-title text-uppercase text-muted mb-0">Baterai 100%</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $krb->panjang_keramba }} m x {{ $krb->lebar_keramba }} m</span>
                            </div>
                        </a>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                            <span class="text-nowrap">Since last month</span> -->
                            <span class="text-nowrap">Kelompok {{ $krb->kelompok->nama_kelompok }}</span>
                            <br>
                            <span class="text-nowrap">Milik {{ $krb->user->name }}</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

