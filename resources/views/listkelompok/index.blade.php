@extends('layouts.app', ['title' => __('Manajemen Kelompok')])

@section('content')
    @include('listkelompok.partials.header', ['title' => __('List Kelompok')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Kelompok') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('listkelompok.create') }}" class="btn btn-sm btn-primary">{{ __('Tambah') }}</a>
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
                                    <th scope="col">{{ __('Nama') }}</th>
                                    <th scope="col">{{ __('Ketua') }}</th>
                                    <th scope="col">{{ __('Bendahara') }}</th>
                                    <th scope="col">{{ __('Humas') }}</th>
                                    <th scope="col">{{ __('Tanggal Dibuat') }}</th>
                                    <th scope="col">{{ __('Menu') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelompok as $kel)
                                    <tr>
                                        <td>{{ $kel->nama_kelompok }}</td>
                                        <td>
                                            {{ $kel->ketua_kelompok }}
                                        </td>
                                        <td>
                                            {{ $kel->bendahara_kelompok }}
                                        </td>
                                        <td>
                                            {{ $kel->humas_kelompok }}
                                        </td>
                                        <td>{{ $kel->created_at->format('d/m/Y H:i') }}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <form action="{{ route('listkelompok.destroy', $kel->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            
                                                            <a class="dropdown-item" href="{{ route('listkelompok.edit', $kel->id) }}">{{ __('Edit') }}</a>
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Yakin menghapus kelompok ini?") }}') ? this.parentElement.submit() : ''">
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
                            {{ $kelompok->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
@endsection