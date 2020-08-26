@section('title', 'Đặc điểm địa hình | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content topographic-characteristics">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Đặc điểm địa hình</h3>
    <div class="content">
        <div class="file-name">
            
        </div>
        <div class="file-action">
            <a href="{{ asset('files/2-dac-diem-dia-hinh.docx') }}"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Tải xuống</a>
            <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i>&nbsp;Xem trước</a>
        </div>
    </div>
    <div class="img-location">
        <img src="{{ asset('images/dac-diem-dia-hinh-song-dong-nai.png')  }}" alt="dac-diem-dia-hinh-song-dong-nai"><br>
        <i>Hình 1.40: Bản đồ địa hình lưu vực sông Đồng Nai - Sài Gòn</i>
    </div>
</div>
@endsection('content')