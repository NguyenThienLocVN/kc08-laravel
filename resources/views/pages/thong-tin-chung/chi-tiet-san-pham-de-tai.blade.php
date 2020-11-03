@section('title', 'Chi tiết sản phẩm đề tài | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content detail-scheme-product">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Sản phẩm đề tài</h3>
    <div class="content">
        <h4 class="name font-weight-bold">{{ $schemeProduct->Scheme_Name }}</h4>
        <p>{{ $schemeProduct->Scheme_Description }}</p>
        <a class="mr-3" href="{{route('thong-tin-chung.sua-san-pham-de-tai', $schemeProduct->Scheme_ID)}}">Chỉnh sửa tên</a>&nbsp;<a href="{{ $schemeProduct->Scheme_Url }}" class="btn-download" download><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Tải về</a>
        <a href="#" class="author"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Ban chủ nhiệm đề tài KC 08.28/16-20</a>
    </div>

    <div class="form-comment">
        <p class="title">Gửi bình luận của bạn</p>
        <form action="">
            <div>
                <input type="text" name="name" class="comment-input-name" placeholder="Tên">
                <input type="text" name="name" class="comment-input-email" placeholder="Email">
            </div>
            <textarea name="comment-input-textarea" id="" cols="30" rows="10" placeholder="Nội dung"></textarea>
            <input type="submit" value="Gửi thông tin" class="comment-btn-submit">
        </form>
    </div>
</div>
@endsection('content')