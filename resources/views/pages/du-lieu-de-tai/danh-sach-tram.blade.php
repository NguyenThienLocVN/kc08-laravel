@extends('layouts.base')
@push('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
@endpush
<?php
    // $inputFileName = public_path()."/files/Danhsach.xlsx";

    // /**  Identify the type of $inputFileName  **/
    // $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);

    // /**  Create a new Reader of the type that has been identified  **/
    // $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);

    // /**  Load $inputFileName to a Spreadsheet Object  **/
    // $spreadsheet = $reader->load($inputFileName);
    // $resultSheet = $spreadsheet->getActiveSheet()->toArray();
?>
@section('content')
<div class="list-station">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Danh sách trạm</h3>

    <table>
        <tr class="row-station">
            <td class="item">STT</td>
            <td class="item">Tên trạm</td>
            <td class="item">Kinh độ</td>
            <td class="item">Vĩ độ</td>
            <td class="item">Năm bắt đầu – kết thúc</td>
            <td></td>
        </tr>
        @foreach( $stations as $st )          
            <tr class="row-station">
                <td class="item">{{ $st->Station_ID }}</td>
                <td class="item">{{ $st->Station_Name }}</td>
                <td class="item">{{ $st->Latitude }}</td>
                <td class="item">{{ $st->Longitude }}</td>
                <td class="item">{{ $st->Year_Start_End }}</td>
                
                <td><a href="#" onclick="openForm({{ $st->Station_ID }})" title="Xem chi tiết"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
            </tr>
        @endforeach

    </table>
</div>
<div id="overlay"></div>
<img src="{{ asset('images/loading.gif') }}" class="loading-gif" alt="loading" style="display: none;">

<x-rainfall-popup></x-rainfall-popup>
@endsection('content')