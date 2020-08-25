@section('title', 'Số liệu bùn cát | Chương trình KC.08/16-20')
@extends('layouts.base')
@push('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
@endpush
@section('content')
<div class="content list-station">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Danh sách trạm | Số liệu bùn cát</h3>

    <table>
        <tr class="row-station">
            <td class="item">STT</td>
            <td class="item">Tên trạm</td>
            <td class="item">Lưu vực sông</td>
            <td class="item">F (km<sup>2</sup>)</td>
            <td class="item" style="text-align: center;">Thời kỳ đo đạc</td>
            <td></td>
        </tr>
        @foreach( $stations as $st )
            <tr class="row-station">
                <td class="item">{{ $st->Station_ID }}</td>
                <td class="item">{{ $st->Station_Name }}</td>
                <td class="item">{{ $st->Basin_Name }}</td>
                <td class="item">{{ $st->Elevation }}</td>
                <td class="item">{{ $st->Measurement_Time }}</td>

                <td><a class="btn-view-detail" data-toggle="modal" data-target="#rainfallModal" title="Xem chi tiết" station-name="{{ $st->Station_Name }}" onclick="openMuddySand({{ $st->Station_ID }})"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
            </tr>
        @endforeach

    </table>
</div>
<img src="{{ asset('images/loading.gif') }}" class="loading-gif" alt="loading" style="display: none;">

<x-rainfall-modal></x-rainfall-modal>
@endsection('content')
