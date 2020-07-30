@extends('layouts.base')

@section('content')
<div class="river-system">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Hệ thống sông ngòi</h3>
    <div class="content">
        <div class="file-name">
        
        </div>
        <div class="file-action">
            <a href="{{ asset('files/5-he-thong-song-ngoi.docx') }}"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Tải xuống</a>
            <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i>&nbsp;Xem trước</a>
        </div>
    </div>
</div>
@endsection('content')