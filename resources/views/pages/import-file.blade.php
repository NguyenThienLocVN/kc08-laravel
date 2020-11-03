@section('title', 'Import file | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content landslide-risk">
    <h3 class="title mb-4"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Nhập dữ liệu</h3>
    <p class="text-danger">Định dạng file hợp lệ: .xls, .xlsx</p>
    <div>
        <form method="POST" action="{{ route('do-import-file') }}">
        @csrf
            <div class="form-group">
                <label for="" class="col-1">Chọn file:</label>
                <input required type="file" name="input_file">
            </div>
            
            <div class="form-group">
                <label for="" class="col-1">Dữ liệu:</label>
                <select required name="data_import" id="select-data-import">
                    <option value="">Chọn kiểu dữ liệu</option>
                    <option value="so-lieu-khi-tuong">Số liệu khí tượng</option>
                    <option value="so-lieu-thuy-van">Số liệu thủy văn</option>
                    <option value="so-lieu-bun-cat">Số liệu bùn cát</option>
                    <option value="so-lieu-cong-trinh">Số liệu công trình</option>
                </select>
            </div>
            <button class="btn btn-primary">Xác nhận</button>
        </form>
    </div>
</div>
@endsection('content')