@section('title', 'Import file | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content landslide-risk">
    <h3 class="title mb-4"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Nhập dữ liệu</h3>
    <p class="text-danger">Định dạng file hợp lệ: .xls, .xlsx</p>
    <div>
        <form action="">
            <div class="form-group">
                <label for="" class="col-1">Chọn file:</label>
                <input type="file" name="input-file">
            </div>
            
            <div class="form-group">
                <label for="" class="col-1">Dữ liệu:</label>
                <select name="data-import" id="select-data-import">
                    <option value="1">Số liệu khí tượng</option>
                    <option value="1">Số liệu thủy văn</option>
                    <option value="1">Số liệu bùn cát</option>
                    <option value="1">Số liệu công trình</option>
                </select>
            </div>
            <button class="btn btn-primary">Xác nhận</button>
        </form>
    </div>
</div>
@endsection('content')