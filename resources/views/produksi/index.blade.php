@extends('layouts.app', ['title' => __('Produksi')])

@section('content')
    @include('users.partials.header', ['title' => __('List Produksi')])   

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

                    <div class="card-body px-4">
                        <!-- <h3 class="card-title col-8">Produksi</h3> -->
                        <div  id="listProduksi">
                        </div>
                    </div>
                    <nav class="card-footer py-4 d-flex justify-content-end" aria-label = "page-navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" id="prev-btn-produksi">&#60</a>
                            </li>
                            <li class="page-item active">
                                <div class="page-link" id="page-number-produksi"></div>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" id="next-btn-produksi">&#62</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="table-responsive d-none">
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

@verbatim
<script type="text/template" id="templateProduksi">
    <div class="card shadow card-body mb-3">
        <h3 class="card-title">{{nama_ikan}}</h3>
        <h4 class="card-subtitle text-muted">{{jumlah_ikan}} Ekor</h4>
        <p class="card-text font-weight-bold mt-2">Ukuran: {{panjang_ikan}}
        <br>
        Lokasi: Keramba {{keramba_id}}    
        </p>
        <form class="row align-items-center px-3" action="" method="post">
            <button type="button" class="col btn btn-primary" data-toggle="modal" data-target="#modalProduksi{{id}}">Detail</button>
        </form>
    </div>

    <!--Modal: modalProduksi-->
    <div class="modal fade right" id="modalProduksi{{id}}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-side modal-bottom-right modal-notify" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading">Produksi {{id}}</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body pt-0">
                <div class="row">
                    <div class="col-12">
                        <p><strong>{{nama_ikan}}</strong></p>
                        <p>
                        <strong>Jumlah</strong> {{jumlah_ikan}} Ikan
                        <br>
                        <strong>Ukuran</strong> {{panjang_ikan}} cm
                        <br>
                        <strong>Lokasi</strong> Keramba {{keramba_id}}
                        <br>
                        <strong>Tanggal Tebar</strong>
                        <br>
                        <strong>Tanggal Panen </strong>
                        </p>
                        <div class="alert alert-success text-center">Status: {{status_panen}}</div>
                        <form class="align-items-center px-3" action="" method="post">
                            <div class="row">
                                <button type="button" class="col btn btn-primary" data-toggle="modal" data-target="#modalPencucian{{id}}">Pencucian</button>
                                <button type="button" class="col btn btn-primary" data-toggle="modal" data-target="#modalPemindahan{{id}}">Pemindahan</button>
                            
                            </div>
                            <div class="row mt-3">
                                <button data-id='{{id}}' id="panen" type="button" class="col btn btn-primary" data-toggle="modal" data-target="#modalPanen{{id}}">Panen</button>
                                <button data-id='{{id}}' id="delete" type="button" class="col btn btn-danger">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
    </div>
    <!--Modal: modalProduksi-->

    <!-- modalCuci -->
    <div class="modal fade right" id="modalPencucian{{id}}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-side modal-bottom-right modal-notify" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading">Pencucian Produksi {{id}}</p>

                <button data-id='{{id}}' id="batal" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body pt-0">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-nama-ikan">Nama Ikan</label>
                            <div>{{nama_ikan}}</div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="input-panjang-ikan">Panjang Ikan Setelah Cuci (cm)</label>
                            <input type="number" name="panjang_ikan" id="input-panjang-ikan" class="form-control form-control-alternative" placeholder="Panjang Ikan Setelah Cuci (cm)" value="" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="input-jumlah-ikan">Jumlah Ikan Setelah Cuci</label>
                            <input type="number" name="jumlah_ikan" id="input-jumlah-ikan" class="form-control form-control-alternative" placeholder="Jumlah Ikan Setelah Cuci" value="" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="input-tgl-tebar">Tanggal Cuci</label>
                            <input type="date" name="tanggal_cuci" id="input-tgl-tebar" class="form-control form-control-alternative" placeholder="Tanggal Cuci" value="" required>
                        </div>
                        <form class="align-items-center px-3" action="" method="post">
                            <div class="row">
                                <button type="button" class="col btn btn-primary" >Simpan</button>
                                <button type="button" data-id='{{id}}' id="batal" class="col btn btn-primary" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
    </div>
    <!-- Modal: modalCuci -->

    <!-- modalPindah -->
    <div class="modal fade right" id="modalPemindahan{{id}}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-side modal-bottom-right modal-notify" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading">Pemindahan Produksi {{id}}</p>

                <button data-id='{{id}}' id="batal" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body pt-0">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-control-label" for="input-nama-ikan">Nama Ikan</label>
                            <div>{{nama_ikan}}</div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="input-panjang-ikan">Panjang Ikan Setelah Pindah (cm)</label>
                            <input type="number" name="panjang_ikan" id="input-panjang-ikan" class="form-control form-control-alternative" placeholder="Panjang Ikan Setelah Pindah (cm)" value="" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="input-jumlah-ikan">Jumlah Ikan Setelah Pindah</label>
                            <input type="number" name="jumlah_ikan" id="input-jumlah-ikan" class="form-control form-control-alternative" placeholder="Jumlah Ikan Setelah Pindah" value="" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="input-keramba">Lokasi Keramba Baru</label>
                            <input type="number" name="keramba_id" id="input-keramba" class="form-control form-control-alternative" placeholder="Lokasi Keramba Baru" value="" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="input-tgl-pindah">Tanggal Pindah</label>
                            <input type="date" name="tanggal_pindah" id="input-tgl-pindah" class="form-control form-control-alternative" placeholder="Tanggal Pindah" value="" required>
                        </div>
                        <form class="align-items-center px-3" action="" method="post">
                            <div class="row">
                                <button type="button" class="col btn btn-primary" >Simpan</button>
                                <button type="button" data-id='{{id}}' id="batal" class="col btn btn-primary" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
    </div>
    <!-- Modal: modalCuci -->
</script>
@endverbatim

@push('js')
<script type="text/javascript">
$(function(){
    // Variabel Id Div
    var $produksi = $('#listProduksi');

    // Script Template Untuk Mustache 
    var $produksiTemplate = $("#templateProduksi").html();

    // Pagination variable
    var page = 1;
    var pagination;
    var metaProduksi;
    var linksProduksi;

    // Fetch Data
    fetchData();

    function fetchData() {
        // Setup AJAX Token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: "{{ url('api/apiproduksi') }}",
            dataType: 'json',
            data: {
                page: page
            },
            success: 
            function(produksi){
                var html = "";
                for (var i = 0; i < produksi.data.length; i++){
                    html += Mustache.render($produksiTemplate, produksi.data[i]);
                }
                $produksi.html(html);

                metaProduksi = produksi.meta;
                linksProduksi = produksi.links;

                // Pagination Produksi
                paginationProduksi = {
                    current_page: metaProduksi.current_page,
                    last_page: metaProduksi.last_page,
                    next_page_url: linksProduksi.next,
                    prev_page_url: linksProduksi.prev
                };
                $('#page-number-produksi').html(paginationProduksi.current_page);
            }
        });
    }

    // AJAX delete produksi
    $produksi.delegate('#delete','click', function(){
        let id = $(this).attr('data-id');
        var $div = $("#modalProduksi"+id);
        console.log(id);
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('api/apiproduksi/delete') }}"+'/'+id,
            dataType: 'json',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },
            data: {
                "id": id,
                "_token": "{{ csrf_token() }}",
                '_method': 'DELETE'
            },
            success: function (data) {
                if(!alert('Data Berhasil Dihapus')){
                    $div.fadeOut(300,function(){
                        $('#modalProduksi'+id).hide();
                        $('#modalProduksi'+id).modal('hide');
                        $('.modal-backdrop').hide();
                        fetchData();
                    });
                }
            }
            
        });
    });
    $produksi.delegate('#batal','click', function(){
        console.log('hayu');
        let id = $(this).attr('data-id');
        $(':input','#modalPemindahan'+id)
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .prop('checked', false)
            .prop('selected', false);
        $(':input','#modalPencucian'+id)
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .prop('checked', false)
            .prop('selected', false);
    });
    // Pagination Produksi
    $("#prev-btn-produksi").on("click", function(e){
        e.preventDefault();
        if (page > 1){
            page--;
            fetchData();
        }
    });
    $("#next-btn-produksi").on("click", function(e){
        e.preventDefault();
        if (page < paginationProduksi.last_page){
            page++;
            fetchData();
        }
    });

});
</script>
@endpush

@endsection