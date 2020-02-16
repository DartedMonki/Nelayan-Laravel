@extends('layouts.app', ['title' => __('Pakan Otomatis')])

@section('content')
    @include('users.partials.header', ['title' => __('List Pakan Otomatis')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <!-- <div class="card-header bg-white border-0">
                        <div class="row align-items-center">

                        </div>
                    </div> -->
                    <div class="card-body px-4">
                        <h3 class="card-title col-8">Pemberi Pakan Otomatis</h3>
                        <div  id="listPakan">
                        </div>
                    </div>
                    <nav class="card-footer py-4 d-flex justify-content-end" aria-label = "page-navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" id="prev-btn-pakan">&#60</a>
                            </li>
                            <li class="page-item active">
                                <div class="page-link" id="page-number-pakan"></div>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" id="next-btn-pakan">&#62</a>
                            </li>
                        </ul>
                    </nav>

                    <!-- MODAL START -->

                    <!-- Button trigger modal-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalRelatedContent">Launch
                    modal</button>

                    <!--Modal: modalRelatedContent-->
                    <div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                    <div class="modal-dialog modal-side modal-bottom-right modal-notify" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                                <p class="heading">Produksi 1</p>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="white-text">&times;</span>
                                </button>
                            </div>

                            <!--Body-->
                            <div class="modal-body pt-0">
                                <div class="row">
                                    <div class="col-12">
                                        <p><strong>Kerapu Cantang</strong></p>
                                        <p>
                                        200 Ekor
                                        </br>
                                        Ukuran 5 cm
                                        </br>
                                        Lokasi Keramba 1
                                        </br>
                                        Tanggal Tebar 25 Agustus
                                        </br>
                                        Tanggal Panen 29 Desember
                                        </p>
                                        <div class="alert alert-warning text-center">Belum Panen</div>
                                        <form class="row align-items-center px-3" action="" method="post">
                                            <button type="button" class="col btn btn-primary">Edit</a>
                                            <button data-id='' id="delete" type="button" class="col btn btn-primary">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                    </div>
                    <!--Modal: modalRelatedContent-->

                    <!-- MODAL END -->
                   
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>

@verbatim
<script type="text/template" id="templatePakan">
    <div class="card shadow card-body mb-3">
        <h3 class="card-title">Pakan {{id}} </h3>
        <h4 class="card-subtitle text-muted">Baterai {{baterai_pakan}} </h4>
        <p class="card-text font-weight-bold mt-2">Keramba: {{keramba_id}} </p>
        <form class="row align-items-center px-3" action="" method="post">
            <!-- <button type="button" class="col btn btn-primary">Edit</a> -->
            <!-- <button data-id='{{id}}' id="delete" type="button" class="col btn btn-primary">Hapus</button> -->
        </form>
    </div>
</script>
@endverbatim

@push('js')
<script type="text/javascript">
$(function(){
    // Variabel Id Div
    var $pakan = $('#listPakan');

    // Script Template Untuk Mustache 
    var $pakanTemplate = $("#templatePakan").html();

    // Pagination variable
    var page = 1;
    var pagination;
    var metaPakan;
    var linksPakan;

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
            url: "{{ url('api/apipakan') }}",
            dataType: 'json',
            data: {
                page: page
            },
            success: 
            function(pakan){
                // $.each(sensorSuhu.data, function(i, data) { 
                //     // console.log(data);
                //     var html="";
                //     $sensorSuhu.append(Mustache.render($suhuTemplate, data));
                    
                // });
                var html = "";
                for (var i = 0; i < pakan.data.length; i++){
                    html += Mustache.render($pakanTemplate, pakan.data[i]);
                }
                $pakan.html(html);

                metaPakan = pakan.meta;
                linksPakan = pakan.links;

                // Pagination Suhu
                paginationPakan = {
                    current_page: metaPakan.current_page,
                    last_page: metaPakan.last_page,
                    next_page_url: linksPakan.next,
                    prev_page_url: linksPakan.prev
                };
                $('#page-number-pakan').html(paginationPakan.current_page);
            }
        });
    }

    // Pagination Suhu
    $("#prev-btn-pakan").on("click", function(e){
        e.preventDefault();
        if (page > 1){
            page--;
            fetchData();
        }
    });
    $("#next-btn-pakan").on("click", function(e){
        e.preventDefault();
        if (page < paginationPakan.last_page){
            page++;
            fetchData();
        }
    });
});
</script>
@endpush
@endsection