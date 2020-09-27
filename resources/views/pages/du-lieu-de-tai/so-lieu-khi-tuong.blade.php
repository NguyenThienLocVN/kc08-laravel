@section('title', 'Số liệu khí tượng | Chương trình KC.08/16-20')
@extends('layouts.base')
@push('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/offline-exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script src="{{asset('js/meteorology.js')}}"></script>
@endpush
@section('content')
<div class="content list-station meteorology-stations">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Danh sách trạm | Số liệu khí tượng</h3>

    <table>
        <tr class="row-station">
            <td class="item">STT</td>
            <td class="item">Tên trạm</td>
            <td class="item">Tỉnh / Thành phố</td>
            <td class="item" style="text-align: center;">Thời kỳ đo đạc</td>
            <td></td>
        </tr>
        @foreach( $meteorologyStations as $st )
            <tr class="row-station station-item">
                <td class="item">{{ $st->Station_ID }}</td>
                <td class="item">{{ $st->Station_Name }}</td>
                <td class="item">{{ $st->State }}</td>
                <td class="item">{{ $st->Measurement_Time }}</td>

                <td class="text-center"><a class="btn-view-detail" data-toggle="modal" data-target="#meteorologyModal" title="Xem chi tiết" station-name="{{ $st->Station_Name }}" onclick="loadMeteorology({{ $st->Station_ID }})"><i class="fa fa-search" aria-hidden="true"></i></a></td>
            </tr>
        @endforeach

    </table>
</div>
<img src="{{ asset('images/loading.gif') }}" id="loading-gif-image" class="loading-gif position-absolute" alt="loading" style="display: none;">
<div id="overlay"></div>

<x-meteorology-modal></x-meteorology-modal>
@endsection('content')
