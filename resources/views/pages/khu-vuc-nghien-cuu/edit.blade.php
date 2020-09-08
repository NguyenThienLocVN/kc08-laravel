@section('title', 'Chỉnh sửa | '.$feature->natural_features.' | Chương trình KC.08/16-20')
@extends('layouts.base')
@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
@endpush
@section('content')
<div class="content geographical-location">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp; Chỉnh sửa - {{ $feature->natural_features }}</h3>
    <div class="content">
        <div class="main-content">
            <div class="description">
                <form action="{{ url('/khu-vuc-nghien-cuu/'.$feature->slug.'/edit') }}" method="post">
                @csrf
                    <p class="my-0 mt-3 font-weight-bold">Tiêu đề</p>
                    <input type="text" name="input_natural_features" value="{{ $feature->natural_features }}" >

                    <p class="my-0 mt-3 font-weight-bold">Mô tả</p>
                    <textarea name="input_description" id="input-description" cols="80" rows="15">{{ $feature->description }}</textarea>
                    <br>
                    <button href="" class="btn btn-outline-primary">Lưu lại</button>
                    <a href="{{ url()->previous() }}" class="btn btn-outline-danger">Trở lại</a>
                </form>
            </div>
            <div class="illustration img-location">

            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#input-description' ) )
            .replace('input_description')
            .catch( error => {
                console.error( error );
            } );
    </script>
</div>
@endsection('content')