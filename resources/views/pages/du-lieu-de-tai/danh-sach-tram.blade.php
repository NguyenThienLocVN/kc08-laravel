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
            
            <td><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
        </tr>
    @endforeach

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Chi tiết trạm</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <div class="row mb-1">
              <label for="" class="col-4">Ngày bắt đầu</label>
              <input type="date" name="start-date">
          </div>
          <div class="row">
              <label for="" class="col-4">Ngày kết thúc</label>
              <input type="date" name="end-date">
          </div>
          <div>
              <h4>Biểu đồ</h4>
          </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection('content')