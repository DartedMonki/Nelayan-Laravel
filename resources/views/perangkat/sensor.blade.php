@extends('layouts.app', ['title' => __('Sensor')])

@section('content')
    @include('users.partials.header', ['title' => __('List Sensor')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">

                    

                    <!-- <div id="app">
                        <div class="container-fluid">
                            <sensor></sensor>
                        </div>
                    </div> -->
                    <div class="card-body px-4">
                        <h3 class="card-title col-8">Sensor Suhu</h3>
                        <div  id="listSensorSuhu">
                        </div>
                    </div>
                    <nav class="card-footer py-4 d-flex justify-content-end" aria-label = "page-navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" id="prev-btn-suhu">&#60</a>
                            </li>
                            <li class="page-item active">
                                <div class="page-link" id="page-number-suhu"></div>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" id="next-btn-suhu">&#62</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="px-4">
                        <h3 class="col-8">Sensor Do</h3>
                        <div  id="listSensorDo">
                        </div>
                    </div>
                    <nav class="card-footer py-4 d-flex justify-content-end" aria-label = "page-navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" id="prev-btn-do">&#60</a>
                            </li>
                            <li class="page-item active">
                                <div class="page-link" id="page-number-do"></div>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" id="next-btn-do">&#62</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="px-4">
                        <h3 class="col-8">Sensor Kelembaban Temperatur</h3>
                        <div  id="listSensorHumTemp">
                        </div>
                    </div>
                    <nav class="card-footer py-4 d-flex justify-content-end" aria-label = "page-navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" id="prev-btn-humtemp">&#60</a>
                            </li>
                            <li class="page-item active">
                                <div class="page-link" id="page-number-humtemp"></div>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" id="next-btn-humtemp">&#62</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="px-4">
                        <h3 class="col-8">Sensor Arus</h3>
                        <div  id="listSensorWave">
                        </div>
                    </div>
                    <nav class="card-footer py-4 d-flex justify-content-end" aria-label = "page-navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" id="prev-btn-wave">&#60</a>
                            </li>
                            <li class="page-item active">
                                <div class="page-link" id="page-number-wave"></div>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" id="next-btn-wave">&#62</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="px-4">
                        <h3 class="col-8">Sensor Angin</h3>
                        <div  id="listSensorWind">
                        </div>
                    </div>
                    <nav class="card-footer py-4 d-flex justify-content-end" aria-label = "page-navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" id="prev-btn-wind">&#60</a>
                            </li>
                            <li class="page-item active">
                                <div class="page-link" id="page-number-wind"></div>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" id="next-btn-wind">&#62</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
                    
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>

@verbatim
<script type="text/template" id="templateSuhu">
    <div href=# class="card shadow card-body mb-3">
        <h3 class="card-title">Sensor {{id}} </h3>
        <h4 class="card-subtitle text-muted">Suhu {{suhu_air}} </h4>
        <p class="card-text font-weight-bold mt-2">Keramba: {{keramba_id}} </p>
        <form class="row align-items-center px-3" action="" method="post">
            <!-- <button type="button" class="col btn btn-primary">Edit</a> -->
            <!-- <button data-id='{{id}}' id="delete" type="button" class="col btn btn-primary">Hapus</button> -->
        </form>
    </div>
</script>

<script type="text/template" id="templateDo">
    <div href=# class="card shadow card-body mb-3">
        <h3 class="card-title">Sensor {{id}} </h3>
        <h4 class="card-subtitle text-muted">Suhu {{do_air}} </h4>
        <p class="card-text font-weight-bold mt-2">Keramba: {{keramba_id}} </p>
    </div>
</script>

<script type="text/template" id="templateWave">
    <div href=# class="card shadow card-body mb-3">
        <h3 class="card-title">Sensor {{id}} </h3>
        <h4 class="card-subtitle text-muted">Ketinggian Air {{ketinggian_air}} </h4>
        <p class="card-text font-weight-bold mt-2">Waktu {{time}}
        <br>
        Tanggal: {{date}} </p>
    </div>
</script>

<script type="text/template" id="templateWind">
    <div href=# class="card shadow card-body mb-3">
        <h3 class="card-title">Sensor {{id}} </h3>
        <h4 class="card-subtitle text-muted mb-2">Arah Angin {{arah_angin}} </h4>
        <h4 class="card-subtitle text-muted">Kecepatan Angin {{kecepatan_angin}} </h4>
        <p class="card-text font-weight-bold mt-2">Waktu {{time}}
        <br>
        Tanggal: {{date}} </p>
    </div>
</script>

<script type="text/template" id="templateHumTemp">
    <div href=# class="card shadow card-body mb-3">
        <h3 class="card-title">Sensor {{id}} </h3>
        <h4 class="card-subtitle text-muted mb-2">Kelembaban {{humidity}} </h4>
        <h4 class="card-subtitle text-muted">Temperatur {{temperature}} </h4>
        <p class="card-text font-weight-bold mt-2">Waktu {{time}}
        <br>
        Tanggal: {{date}} </p>
    </div>
</script>
@endverbatim

@push('js')
<script type="text/javascript">
$(function(){
    // Variabel Id Div
    var $sensorSuhu = $('#listSensorSuhu');
    var $sensorDo = $('#listSensorDo');
    var $sensorHumTemp = $('#listSensorHumTemp');
    var $sensorWave = $('#listSensorWave');
    var $sensorWind = $('#listSensorWind');

    // Script Template Untuk Mustache 
    var $suhuTemplate = $("#templateSuhu").html();
    var $doTemplate = $("#templateDo").html();
    var $humtempTemplate = $("#templateHumTemp").html();
    var $waveTemplate = $("#templateWave").html();
    var $windTemplate = $("#templateWind").html();

    // Pagination variable
    var pageSensorSuhu = 1;
    var pageSensorDo = 1;
    var pageSensorHumTemp = 1;
    var pageSensorWave = 1;
    var pageSensorWind = 1;
    var paginationSuhu;
    var metaSensorSuhu;
    var linksSensorSuhu;
    var metaSensorDo;
    var linksSensorDo;
    var metaSensorHumTemp;
    var linksSensorHumTemp;
    var metaSensorWave;
    var linksSensorWave;
    var metaSensorWind;
    var linksSensorWind;

    // Fetch Data
    fetchData();
    fetchData.Suhu();
    fetchData.Do();
    fetchData.HumTemp();
    fetchData.Wave();
    fetchData.Wind();

    function fetchData() {
        // Setup AJAX Token
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        // AJAX get sensor suhu
        function fetchSuhu() {
            $.ajax({
                type: "GET",
                url: "{{ url('api/apisensorsuhu') }}",
                dataType: 'json',
                data: {
                    page: pageSensorSuhu
                },
                success: 
                function(sensorSuhu){
                    // $.each(sensorSuhu.data, function(i, data) { 
                    //     // console.log(data);
                    //     var html="";
                    //     $sensorSuhu.append(Mustache.render($suhuTemplate, data));
                        
                    // });
                    var html = "";
                    for (var i = 0; i < sensorSuhu.data.length; i++){
                        html += Mustache.render($suhuTemplate, sensorSuhu.data[i]);
                    }
                    $sensorSuhu.html(html);

                    metaSensorSuhu = sensorSuhu.meta;
                    linksSensorSuhu = sensorSuhu.links;

                    // Pagination Suhu
                    paginationSuhu = {
                        current_page: metaSensorSuhu.current_page,
                        last_page: metaSensorSuhu.last_page,
                        next_page_url: linksSensorSuhu.next,
                        prev_page_url: linksSensorSuhu.prev
                    };
                    $('#page-number-suhu').html(paginationSuhu.current_page);
                }
            });
        };

        fetchData.Suhu = fetchSuhu;
        
        // AJAX get sensor do
        function fetchDo() {
            $.ajax({
                type: "GET",
                url: "{{ url('api/apisensordo') }}",
                dataType: 'json',
                data: {
                    page: pageSensorDo
                },
                success: 
                function(sensorDo){
                    var html = "";
                    for (var i = 0; i < sensorDo.data.length; i++){
                        html += Mustache.render($doTemplate, sensorDo.data[i]);
                    }
                    $sensorDo.html(html);

                    metaSensorDo = sensorDo.meta;
                    linksSensorDo = sensorDo.links;

                    // Pagination Do
                    paginationDo = {
                        current_page: metaSensorDo.current_page,
                        last_page: metaSensorDo.last_page,
                        next_page_url: linksSensorDo.next,
                        prev_page_url: linksSensorDo.prev
                    };
                    $('#page-number-do').html(paginationDo.current_page);
                }
            });
        }
        fetchData.Do = fetchDo;

        // AJAX get sensor humtemp
        function fetchHumTemp() {
            $.ajax({
                type: "GET",
                url: "{{ url('api/apisensorhumtemp') }}",
                dataType: 'json',
                data: {
                    page: pageSensorHumTemp
                },
                success: 
                function(sensorHumTemp){
                    var html = "";
                        for (var i = 0; i < sensorHumTemp.data.length; i++){
                            html += Mustache.render($humtempTemplate, sensorHumTemp.data[i]);
                        }
                        $sensorHumTemp.html(html);

                        metaSensorHumTemp = sensorHumTemp.meta;
                        linksSensorHumTemp = sensorHumTemp.links;

                        // Pagination Do
                        paginationHumTemp = {
                            current_page: metaSensorHumTemp.current_page,
                            last_page: metaSensorHumTemp.last_page,
                            next_page_url: linksSensorHumTemp.next,
                            prev_page_url: linksSensorHumTemp.prev
                        };
                        $('#page-number-humtemp').html(paginationHumTemp.current_page);
                }
            });
        }
        fetchData.HumTemp = fetchHumTemp;
        // AJAX get sensor wave
        function fetchWave() {
            $.ajax({
                type: "GET",
                url: "{{ url('api/apisensorwave') }}",
                dataType: 'json',
                data: {
                    page: pageSensorWave
                },
                success: 
                function(sensorWave){
                    var html = "";
                        for (var i = 0; i < sensorWave.data.length; i++){
                            html += Mustache.render($waveTemplate, sensorWave.data[i]);
                        }
                        $sensorWave.html(html);

                        metaSensorWave = sensorWave.meta;
                        linksSensorWave = sensorWave.links;

                        // Pagination Wave
                        paginationWave = {
                            current_page: metaSensorWave.current_page,
                            last_page: metaSensorWave.last_page,
                            next_page_url: linksSensorWave.next,
                            prev_page_url: linksSensorWave.prev
                        };
                        $('#page-number-wave').html(paginationWave.current_page);
                }
            });
        }
        fetchData.Wave = fetchWave;

        // AJAX get sensor wind
        function fetchWind() {
            $.ajax({
                type: "GET",
                url: "{{ url('api/apisensorwind') }}",
                dataType: 'json',
                data: {
                    page: pageSensorWind
                },
                success: 
                function(sensorWind){
                    var html = "";
                        for (var i = 0; i < sensorWind.data.length; i++){
                            html += Mustache.render($windTemplate, sensorWind.data[i]);
                        }
                        $sensorWind.html(html);

                        metaSensorWind = sensorWind.meta;
                        linksSensorWind = sensorWind.links;

                        // Pagination Wind
                        paginationWind = {
                            current_page: metaSensorWind.current_page,
                            last_page: metaSensorWind.last_page,
                            next_page_url: linksSensorWind.next,
                            prev_page_url: linksSensorWind.prev
                        };
                        $('#page-number-wind').html(paginationWind.current_page);
                }
            });
        }
        fetchData.Wind = fetchWind;
    }

    // AJAX delete sensor suhu
    $sensorSuhu.delegate('#delete','click', function(){
        var $div = $(this).closest('div');
        let id = $(this).attr('data-id');
        console.log(id);
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('api/apisensorsuhu/delete') }}"+'/'+id,
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
                        $(this).remove();
                    });
                }
            }
            
        });
    });


    // Pagination Suhu
    $("#prev-btn-suhu").on("click", function(e){
        e.preventDefault();
        if (pageSensorSuhu > 1){
            pageSensorSuhu--;
            fetchData.Suhu();
        }
    });
    $("#next-btn-suhu").on("click", function(e){
        e.preventDefault();
        if (pageSensorSuhu < paginationSuhu.last_page){
            pageSensorSuhu++;
            fetchData.Suhu();
        }
    });

    // Pagination Do
    $("#prev-btn-do").on("click", function(e){
        e.preventDefault();
        if (pageSensorDo > 1){
            pageSensorDo--;
            fetchData.Do();
        }
    });
    $("#next-btn-do").on("click", function(e){
        e.preventDefault();
        if (pageSensorDo < paginationDo.last_page){
            pageSensorDo++;
            fetchData.Do();
        }
    });

    // Pagination HumTemp
    $("#prev-btn-humtemp").on("click", function(e){
        e.preventDefault();
        if (pageSensorHumTemp > 1){
            pageSensorHumTemp--;
            fetchData.HumTemp();
        }
    });
    $("#next-btn-humtemp").on("click", function(e){
        e.preventDefault();
        if (pageSensorHumTemp < paginationHumTemp.last_page){
            pageSensorHumTemp++;
            fetchData.HumTemp();
        }
    });

    // Pagination Wave
    $("#prev-btn-wave").on("click", function(e){
        e.preventDefault();
        if (pageSensorWave > 1){
            pageSensorWave--;
            fetchData.Wave();
        }
    });
    $("#next-btn-wave").on("click", function(e){
        e.preventDefault();
        if (pageSensorWave < paginationWave.last_page){
            pageSensorWave++;
            fetchData.Wave();
        }
    });

    // Pagination Wind
    $("#prev-btn-wind").on("click", function(e){
        e.preventDefault();
        if (pageSensorWind > 1){
            pageSensorWind--;
            fetchData.Wind();
        }
    });
    $("#next-btn-wind").on("click", function(e){
        e.preventDefault();
        if (pageSensorWind < paginationWind.last_page){
            pageSensorWind++;
            fetchData.Wind();
        }
    });

});
</script>


@endpush
@endsection