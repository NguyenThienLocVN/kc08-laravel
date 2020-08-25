@extends('layouts.base')

@section('content')
<div class="content scheme-product">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Sản phẩm đề tài</h3>
    <ul class="list-scheme-product">
        @foreach($schemeProducts as $schemeProduct)
        <li>
            <a class="title" href="{{ route('thong-tin-chung.chi-tiet-san-pham-de-tai', $schemeProduct->Scheme_ID) }}"><b>{{ $schemeProduct->Scheme_Name }}</b></a>
            <p class="desc"> {{ $schemeProduct->Scheme_Description }}</p>
            <a class="read-more" href="{{ route('thong-tin-chung.chi-tiet-san-pham-de-tai', $schemeProduct->Scheme_ID) }}">Xem tiếp</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection('content')