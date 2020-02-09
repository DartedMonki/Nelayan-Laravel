@extends('layouts.app', ['title' => __('Keramba')])

@section('content')
    @include('listkelompok.partials.header', ['title' => __('List Keramba')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Keramba') }}</h3>
                            </div>
                            @if (auth()->user()->kelompok_id != NULL)
                            <div class="col-4 text-right">
                                <a href="{{ route('keramba.create') }}" class="btn btn-sm btn-primary">{{ __('Tambah') }}</a>
                            </div>
                            @else
                            <div class="card-body">
                            <div class="col-12">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ __('Anda Belum Memiliki Kelompok!') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            </div>
                                <h2 class="col-12 mb-0 mt-4 text-center">{{ __('Konfigurasi Kelompok Untuk Mengakses Keramba') }}</h2>
                            </div>
                            @endif
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
                    @foreach ($keramba as $krb)
                        @if ($krb->user->id == auth()->user()->id || auth()->user()->status == 'admin' || $krb->kelompok->id == auth()->user()->kelompok_id)
                        <div class="px-3">
                            <div href=# class="card shadow card-body mb-3">
                                <h3 class="card-title">{{ $krb->nama_keramba }}</h3>
                                <h4 class="card-subtitle text-muted">{{ __('Kelompok') }} {{ $krb->kelompok->nama_kelompok }}</h4>
                                <p class="card-text font-weight-bold mt-2">{{ __('Ukuran:') }} {{ $krb->panjang_keramba }} cm x {{ $krb->lebar_keramba }} cm
                                <br>
                                {{ __('Kapasitas') }} {{ $krb->kapasitas_keramba }} {{ __('Ekor') }}
                                </p>
                                <form class="row align-items-center px-3" action="{{ route('keramba.destroy', $krb->id) }}" method="post">
                                @csrf
                                @method('delete')
                                    <a href="{{ route('keramba.edit', $krb->id) }}" class="col btn btn-primary">Edit</a>
                                    <button type="button" class="col btn btn-primary" onclick="confirm('{{ __("Yakin menghapus produksi ini?") }}') ? this.parentElement.submit() : ''">Hapus</button>
                                </form> 
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection