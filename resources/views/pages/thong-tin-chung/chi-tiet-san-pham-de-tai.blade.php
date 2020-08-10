@extends('layouts.base')

@section('content')
<div class="content detail-scheme-product">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Sản phẩm đề tài</h3>
    <div class="content">
        <h4 class="name">Đề án Quy hoạc tổng thể lĩnh vực Ứng phó sự cố, thiên tai và Tìm kiếm cứu nạn đến năm 2020</h4>
        <a href="{{ asset('files/sample.pdf') }}" class="btn-download"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Tải về</a>
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

    <div class="other-post">
        <p class="title"><b>Các tin khác</b></p>
        <ul class="list-other-post">
            <li><a href="chi-tiet-san-pham-de-tai.html">Đề án nâng cao nhận thức cộng đồng và quản lý rủi ro dựa vào cộng đồng (23/26/2015 15:00)</a></li>
            <li><a href="chi-tiet-san-pham-de-tai.html">Chương trình củng cố, nâng cấp hệ thống đê biển từ Quảng Ngãi đến Kiên Giang (23/26/2015 15:00)</a></li>
            <li><a href="chi-tiet-san-pham-de-tai.html">Đề án nâng cao nhận thức cộng đồng và quản lý rủi ro dựa vào cộng đồng (23/26/2015 15:00)</a></li>
        </ul>
    </div>
</div>
@endsection('content')