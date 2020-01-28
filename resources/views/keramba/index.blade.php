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

                    <!-- <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Nama') }}</th>
                                    <th scope="col">{{ __('Ketua') }}</th>
                                    <th scope="col">{{ __('Bendahara') }}</th>
                                    <th scope="col">{{ __('Humas') }}</th>
                                    <th scope="col">{{ __('Tanggal Dibuat') }}</th>
                                    <th scope="col">{{ __('Menu') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keramba as $krb)
                                    <tr>
                                        <td>{{ $krb->nama_kelompok }}</td>
                                        <td>
                                            {{ $krb->ketua_kelompok }}
                                        </td>
                                        <td>
                                            {{ $krb->bendahara_kelompok }}
                                        </td>
                                        <td>
                                            {{ $krb->humas_kelompok }}
                                        </td>
                                        
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <form action="{{ route('listkelompok.destroy', $krb->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            
                                                            <a class="dropdown-item" href="{{ route('listkelompok.edit', $krb->id) }}">{{ __('Ubah') }}</a>
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Yakin menghapus kelompok ini?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Hapus') }}
                                                            </button>
                                                        </form>    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $keramba->links() }}
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection