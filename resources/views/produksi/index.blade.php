@extends('layouts.app', ['title' => __('Produksi')])

@section('content')
    @include('kelompok.partials.header', ['title' => __('List Produksi')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
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
                                    <tr>
                                        <td>{{ $prod->nama_ikan }}</td>
                                        <td>{{ $prod->jumlah_ikan }}</td>
                                        <td>{{ $prod->panjang_ikan }}</td>
                                        <td>{{ $prod->tanggal_tebar->format('d/m/Y') }}</td>
                                        
                                        <td>@if ($prod->tanggal_cuci != NULL) {{ $prod->tanggal_cuci->format('d/m/Y') }} @else {{ __('Belum Pernah') }} @endif  </td>
                                        <td>@if ($prod->tanggal_pindah != NULL) {{ $prod->tanggal_pindah->format('d/m/Y') }} @else {{ __('Belum Pernah') }} @endif  </td>
                                        <td>@if ($prod->tanggal_panen != NULL) {{ $prod->tanggal_panen->format('d/m/Y') }} @else {{ __('Belum Pernah') }} @endif  </td>
                                        
                                        <td>{{ $prod->status_panen }}</td>
                                        <td>{{ $prod->id_keramba }}</td>
                                        <td>{{ $prod->id_user }}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <form action="{{ route('produksi.destroy', $prod->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            
                                                            <a class="dropdown-item" href="{{ route('produksi.edit', $prod->id) }}">{{ __('Edit') }}</a>
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Yakin menghapus produksi ini?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Delete') }}
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
                            {{ $produksi->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection