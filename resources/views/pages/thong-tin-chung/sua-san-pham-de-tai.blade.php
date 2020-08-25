@section('title', 'Chỉnh sửa sản phẩm đề tài | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content detail-scheme-product">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Chỉnh sửa sản phẩm đề tài</h3>
    
    <div class="form-comment">
        <form method="post" action="{{url('thong-tin-chung/san-pham-de-tai/'.$schemeProduct->Scheme_ID.'/edit')}}">
        @csrf
        <div class="d-flex">
            <div class="mr-5">
                <span class="font-weight-bold">Tên đề tài:</span>
                <textarea name="scheme-name" id="" cols="50" rows="4">{{ $schemeProduct->Scheme_Name }}</textarea>
            </div>

            <div>
                <span class="font-weight-bold">Mô tả:</span>
                <textarea name="scheme-desc" id="" cols="50" rows="4">{{ $schemeProduct->Scheme_Description }}</textarea>
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Xác nhận">
        <a class="btn btn-danger" href="{{ route('thong-tin-chung.chi-tiet-san-pham-de-tai', $schemeProduct->Scheme_ID)}}">Trở về</a>
        </form>
    </div>
</div>
@endsection('content')