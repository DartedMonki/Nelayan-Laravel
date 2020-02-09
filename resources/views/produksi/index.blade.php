@extends('layouts.app', ['title' => __('Produksi')])

@section('content')
    @include('listkelompok.partials.header', ['title' => __('List Produksi')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Produksi') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('produksi.create') }}" class="btn btn-sm btn-primary">{{ __('Penebaran') }}</a>
                            </div>
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
                    @foreach ($produksi as $prod)
                        @if ($prod->user_id == auth()->user()->id || auth()->user()->status == 'admin')
                        <div class="px-3">
                            <a href=# class="card shadow card-body mb-3">
                                <h3 class="card-title">{{ $prod->nama_ikan }}</h3>
                                <h4 class="card-subtitle text-muted">{{ $prod->jumlah_ikan }} {{ __('Ekor') }}</h4>
                                <p class="card-text font-weight-bold mt-2">{{ __('Ukuran:') }} {{ $prod->panjang_ikan }} {{ __('cm') }}
                                <br>
                                {{ __('Lokasi:') }} {{ $prod->keramba->nama_keramba }}
                                </p>
                                
                            </a>
                        </div>
                        @endif
                    @endforeach
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Nama Ikan') }}</th>
                                    <th scope="col">{{ __('Jumlah Ikan') }}</th>
                                    <th scope="col">{{ __('Panjang Ikan') }}</th>
                                    <th scope="col">{{ __('Tanggal Tebar') }}</th>
                                    <th scope="col">{{ __('Tanggal Cuci') }}</th>
                                    <th scope="col">{{ __('Tanggal Pindah') }}</th>
                                    <th scope="col">{{ __('Tanggal Panen') }}</th>
                                    <th scope="col">{{ __('Status Panen') }}</th>  
                                    <th scope="col">{{ __('Keramba') }}</th>
                                    <th scope="col">{{ __('Milik') }}</th>
                                    <th scope="col">{{ __('Menu') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produksi as $prod)
                                    @if ($prod->user_id == auth()->user()->id || auth()->user()->status == 'admin')
                                    <tr>
                                        <td>{{ $prod->nama_ikan }}</td>
                                        <td>{{ $prod->jumlah_ikan }}</td>
                                        <td>{{ $prod->panjang_ikan }}</td>
                                        <td>{{ $prod->tanggal_tebar->format('d/m/Y') }}</td>
                                        
                                        <td>@if ($prod->tanggal_cuci != NULL) {{ $prod->tanggal_cuci->format('d/m/Y') }} @else {{ __('Belum Pernah') }} @endif  </td>
                                        <td>@if ($prod->tanggal_pindah != NULL) {{ $prod->tanggal_pindah->format('d/m/Y') }} @else {{ __('Belum Pernah') }} @endif  </td>
                                        <td>@if ($prod->tanggal_panen != NULL) {{ $prod->tanggal_panen->format('d/m/Y') }} @else {{ __('Belum Pernah') }} @endif  </td>
                                        
                                        <td>{{ $prod->status_panen }}</td>
                                        <td>{{ $prod->keramba->nama_keramba }}</td>
                                        <td>{{ $prod->user->name }}</td>
                                        <!-- <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <form action="{{ route('produksi.destroy', $prod->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            
                                                            <a class="dropdown-item" href="{{ route('produksi.edit', $prod->id) }}">{{ __('Pencucian') }}</a>
                                                            <a class="dropdown-item" href="{{ route('produksi.edit', $prod->id) }}">{{ __('Pemindahan') }}</a>
                                                            <a class="dropdown-item" href="{{ route('produksi.edit', $prod->id) }}">{{ __('Panen') }}</a>
                                                            <a class="dropdown-item" href="{{ route('produksi.edit', $prod->id) }}">{{ __('Edit') }}</a>
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Yakin menghapus produksi ini?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Delete') }}
                                                            </button>
                                                        </form>    
                                                </div>
                                            </div>
                                        </td> -->
                                        <td class="text-right">
                                            <form action="{{ route('produksi.destroy', $prod->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                                
                                                <a class="btn btn-sm btn-primary" href="{{ route('produksi.cuci', $prod->id) }}">{{ __('Pencucian') }}</a>
                                                <a class="btn btn-sm btn-primary" href="{{ route('produksi.pindah', $prod->id) }}">{{ __('Pemindahan') }}</a>
                                                <a class="btn btn-sm btn-primary" href="{{ route('produksi.panen', $prod->id) }}">{{ __('Panen') }}</a>
                                                <button type="button" class="btn btn-sm btn-primary" onclick="confirm('{{ __("Yakin menghapus produksi ini?") }}') ? this.parentElement.submit() : ''">
                                                    {{ __('Hapus') }}
                                                </button>
                                            </form>    
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $produksi->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection