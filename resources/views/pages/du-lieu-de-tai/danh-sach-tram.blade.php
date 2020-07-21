@extends('layouts.base')

<?php
    $inputFileName = public_path()."/files/Danhsach.xlsx";

    /**  Identify the type of $inputFileName  **/
    $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);

    /**  Create a new Reader of the type that has been identified  **/
    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);

    /**  Load $inputFileName to a Spreadsheet Object  **/
    $spreadsheet = $reader->load($inputFileName);
    $resultSheet = $spreadsheet->getActiveSheet()->toArray();
?>

@section('content')
<div class="list-station">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Danh sách trạm</h3>
    <div>

    <table>
    @foreach( $resultSheet as $single_schedule )          
        <tr class="row">
            @foreach( $single_schedule as $single_item )
                <td class="item">{{ $single_item }}</td>
            @endforeach
            
            <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
        </tr>
    @endforeach

    </table>
    </div>
</div>
@endsection('content')