@extends('layouts.app', ['title' => __('Sensor')])

@section('content')
    @include('listkelompok.partials.header', ['title' => __('List Sensor')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Sensor') }}</h3>
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

                    <!-- <div id="app">
                        <div class="container-fluid">
                            <sensor></sensor>
                        </div>
                    </div> -->
                    <div id="refresh">
                        <div class="px-3">
                            <h3 class="col-8">Sensor Suhu</h3>
                            <div  id="listSensorSuhu">
                            </div>
                        </div>

                        <div class="px-3">
                            <h3 class="col-8">Sensor Do</h3>
                            <div  id="listSensorDo">
                            </div>
                        </div>

                        <div class="px-3">
                            <h3 class="col-8">Sensor Kelembaban Temperatur</h3>
                            <div  id="listSensorHumTemp">
                            </div>
                        </div>

                        <div class="px-3">
                            <h3 class="col-8">Sensor Arus</h3>
                            <div  id="listSensorWave">
                            </div>
                        </div>

                        <div class="px-3">
                            <h3 class="col-8">Sensor Angin</h3>
                            <div  id="listSensorWind">
                            </div>
                        </div>
                    </div>

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
            <button type="button" class="col btn btn-primary">Edit</a>
            <button data-id='{{id}}' id="delete" type="button" class="col btn btn-primary">Hapus</button>
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

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
        type: "GET",
        url: "{{ url('api/apisensorsuhu') }}",
        dataType: 'json',
        data: {
            page: 1
        },
        success: 
        function(sensorSuhu){
            $.each(sensorSuhu.data, function(i, data) { 
                // console.log(data);
				$sensorSuhu.append(Mustache.render($suhuTemplate, data));
                
            });
        }
    });

    $.ajax({
        type: "GET",
        url: "{{ url('api/apisensordo') }}",
        dataType: 'json',
        success: 
        function(sensorDo){
            $.each(sensorDo.data, function(i, data) { 
                // console.log(data);
				$sensorDo.append(Mustache.render($doTemplate, data));
                
            });
        }
    });

    $.ajax({
        type: "GET",
        url: "{{ url('api/apisensorhumtemp') }}",
        dataType: 'json',
        success: 
        function(sensorHumTemp){
            $.each(sensorHumTemp.data, function(i, data) { 
                // console.log(data);
				$sensorHumTemp.append(Mustache.render($humtempTemplate, data));
                
            });
        }
    });

    $.ajax({
        type: "GET",
        url: "{{ url('api/apisensorwave') }}",
        dataType: 'json',
        success: 
        function(sensorWave){
            $.each(sensorWave.data, function(i, data) { 
                // console.log(data);
				$sensorWave.append(Mustache.render($waveTemplate, data));
                
            });
        }
    });

    $.ajax({
        type: "GET",
        url: "{{ url('api/apisensorwind') }}",
        dataType: 'json',
        success: 
        function(sensorWind){
            $.each(sensorWind.data, function(i, data) { 
                // console.log(data);
				$sensorWind.append(Mustache.render($windTemplate, data));
                
            });
        }
    });

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
});
</script>


@endpush
@endsection