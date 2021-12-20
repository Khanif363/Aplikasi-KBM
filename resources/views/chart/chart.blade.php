@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mt-5 offset-md-1">
            <div class="panel panel-default">
                {{-- <div class="panel-heading">Dashboard</div> --}}
                <div class="panel-body">
                    {{-- <canvas id="chartjs" height="280" width="600"></canvas> --}}
                    <div id="chartjs"></div>

                </div>
            </div>
        </div>
    </div>
</div>
@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('chartjs', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: {!! json_encode($role) !!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Role',
        data: [{!! json_encode($siswa) !!}, {!! json_encode($guru) !!}, {!! json_encode($admin) !!}]

    }]
});
</script>
@endsection
@endsection