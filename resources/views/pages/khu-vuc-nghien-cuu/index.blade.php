@section('title', $feature->natural_features.' | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content geographical-location">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;{{ $feature->natural_features }}</h3>
    <div class="content">
        <div class="main-content">
            <div class="description">
                <div class="file-action">
                    <a href="{{ asset('files/'.$feature->file) }}"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Tải xuống (.docx)</a>
                </div>
                <?php echo html_entity_decode($feature->description) ?>

                <a href="{{ url('/khu-vuc-nghien-cuu/'.$feature->slug.'/edit') }}" class="btn btn-outline-primary">Chỉnh sửa</a>
            </div>
            <div class="illustration img-location">
                <img src="{{ asset('images/'.$feature->image) }}" alt="vi-tri-dia-ly-song-dong-nai"><br>
                <i class="mt-2 d-block">{{ $feature->image_caption }}</i>
            </div>
        </div>
    </div>
    
</div>
@endsection('content')