@extends('layouts.base')

@section('content')
<div class="geographical-location">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Vị trí địa lý</h3>
    <div class="content">
        <div class="file-name">
            <span>Xem chi tiết: </span><a href="#"> vi-tri-dia-ly.docx</a>
        </div>
        <div class="file-action">
            <a href="#"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Tải xuống</a>
            <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i>&nbsp;Xem trước</a>
        </div>
    </div>
    <div class="img-location">
        <img src="{{ asset('images/vi-tri-dia-ly-song-dong-nai.png')  }}" alt="vi-tri-dia-ly-song-dong-nai"><br>
        <i>Hình 1.38: Lưu Vực Sông Đồng Nai (DNRB)</i>
    </div>
</div>
@endsection('content')