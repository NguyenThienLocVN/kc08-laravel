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

    <table>
    @foreach( $resultSheet as $single_schedule )          
        <tr class="row-station">
            @foreach( $single_schedule as $single_item )
                <td class="item">{{ $single_item }}</td>
            @endforeach
            
            <td><a href="#" onclick="openForm()" title="Xem chi tiết"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
        </tr>
    @endforeach

    </table>
</div>
<div id="overlay"></div>
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h3 class="station-name">Trạm Yên Châu</h3>
    <button type="button" class="btn cancel" onclick="closeForm()">X</button>
  </form>
</div>
@endsection('content')