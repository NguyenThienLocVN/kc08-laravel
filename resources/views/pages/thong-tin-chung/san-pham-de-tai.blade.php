@extends('layouts.base')

@section('content')
<div class="content scheme-product">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Sản phẩm đề tài</h3>
    <ul class="list-scheme-product">
        <li>
            <a class="title" href="{{ route('thong-tin-chung.chi-tiet-san-pham-de-tai') }}"><b>Đề án Quy hoạch tổng thể lĩnh vực Ứng phó sự cố, thiên tai và Tìm kiếm cứu nạn đến năm 2020</b></a>
            <p class="desc">Quyết định phê duyệt Đề án Quy hoạc tổng thể lĩnh vực Ứng phó sự cố, thiên tai và Tìm kiếm cứu nạn đến năm 2020. (25/06/2015 00:00)</p>
            <a class="read-more" href="{{ route('thong-tin-chung.chi-tiet-san-pham-de-tai') }}">Xem tiếp</a>
        </li>
        <li>
            <a class="title" href="{{ route('thong-tin-chung.chi-tiet-san-pham-de-tai') }}"><b>Đề án nâng cao nhận thức cộng đồng và quản lý rủi ro dựa vào cộng đồng</b></a>
            <p class="desc">Quyết định phê duyệt đề án nâng cao nhận thức cộng đồng và quản lý rủi ro dựa vào cộng đồng.(25/06/2015 00:00)</p>
            <a class="read-more" href="{{ route('thong-tin-chung.chi-tiet-san-pham-de-tai') }}">Xem tiếp</a>
        </li>
        <li>
            <a class="title" href="{{ route('thong-tin-chung.chi-tiet-san-pham-de-tai') }}"><b>Chương trình củng cố, nâng cấp hệ thống đê biển từ Quảng Ngãi đến Kiên Giang</b></a>
            <p class="desc">Quyết định về việc phê duyệt Chương trình củng cố, nâng cấp hệ thống đê biển từ Quảng Ngãi đến Kiên Giang (24/06/2015 00:00)</p>
            <a class="read-more" href="{{ route('thong-tin-chung.chi-tiet-san-pham-de-tai') }}">Xem tiếp</a>
        </li>
    </ul>
</div>
@endsection('content')