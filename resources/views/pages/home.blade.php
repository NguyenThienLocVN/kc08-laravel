@extends('pages.base')

@section('content')
    <div class="content">
        <ul class="sidebar-left" id="sidebar-left-mobile">
            <li><a href="trang-chu.html">TRANG CHỦ</a></li>
            <li class="has-sub"><a href="#">THÔNG TIN CHUNG</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
            <ul class="submenu">
                <li><a href="muc-tieu-de-tai.html">MỤC TIÊU ĐỀ TÀI</a></li>
                <li><a href="san-pham-de-tai.html">SẢN PHẨM ĐỀ TÀI</a></li>
                <li><a href="dong-gop-moi-cua-de-tai.html">ĐÓNG GÓP MỚI CỦA ĐỀ TÀI</a></li>
                <li><a href="#">CÁC SẢN PHẨM ĐÃ CÔNG BỐ</a></li>
            </ul>
            <li class="has-sub"><a href="#">CÁC BÁO CÁO SẢN PHẨM</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
            <ul class="submenu">
                <li><a href="#">BÁO CÁO SẢN PHẨM A</a></li>
                <li><a href="#">BÁO CÁO SẢN PHẨM B</a></li>
                <li><a href="#">BÁO CÁO SẢN PHẨM C</a></li>
            </ul>
            <li class="has-sub"><a href="#">GIỚI THIỆU KHU VỰC NGHIÊN CỨU</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
            <ul class="submenu">
                <li class="has-sub-sub"><a href="#">ĐẶC ĐIỂM ĐIỀU KIỆN TỰ NHIÊN</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
                <ul class="sub-submenu">
                    <li><a href="vi-tri-dia-ly.html">VỊ TRÍ ĐỊA LÝ</a></li>
                    <li><a href="dac-diem-dia-hinh.html">ĐẶC ĐIỂM ĐỊA HÌNH</a></li>
                    <li><a href="tho-nhuong.html">THỔ NHƯỠNG</a></li>
                    <li><a href="tham-phu-thuc-vat.html">THẢM PHỦ THỰC VẬT RỪNG VÀ HỆ THỰC VẬT</a></li>
                    <li><a href="he-thong-song-ngoi.html">HỆ THỐNG SÔNG NGÒI</a></li>
                </ul>
                <li><a href="#">HIỆN TRẠNG KHAI THÁC, SỬ DỤNG ĐẤT VEN SÔNG</a></li>
            </ul>
            <li><a href="#">DỮ LIỆU ĐỀ TÀI</a></li>
            <li><a href="#">HIỆN TƯỢNG SẠT LỞ BỜ SÔNG</a></li>
        </ul>
        <ul class="sidebar-left" id="sidebar-left">
            <li><a href="trang-chu.html">TRANG CHỦ</a></li>
            <li><a href="#">THÔNG TIN CHUNG</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="submenu">
                    <li><a href="muc-tieu-de-tai.html">MỤC TIÊU ĐỀ TÀI</a></li>
                    <li><a href="san-pham-de-tai.html">SẢN PHẨM ĐỀ TÀI</a></li>
                    <li><a href="dong-gop-moi-cua-de-tai.html">ĐÓNG GÓP MỚI CỦA ĐỀ TÀI</a></li>
                    <li><a href="#">CÁC SẢN PHẨM ĐÃ CÔNG BỐ</a></li>
                </ul>
            </li>
            <li><a href="#">CÁC BÁO CÁO SẢN PHẨM</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="submenu">
                    <li><a href="#">BÁO CÁO SẢN PHẨM A</a></li>
                    <li><a href="#">BÁO CÁO SẢN PHẨM B</a></li>
                    <li><a href="#">BÁO CÁO SẢN PHẨM C</a></li>
                </ul>
            </li>
            <li><a href="#">GIỚI THIỆU KHU VỰC NGHIÊN CỨU</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="submenu">
                    <li><a href="#">ĐẶC ĐIỂM ĐIỀU KIỆN TỰ NHIÊN</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                        <ul class="sub-submenu">
                            <li><a href="vi-tri-dia-ly.html">VỊ TRÍ ĐỊA LÝ</a></li>
                            <li><a href="dac-diem-dia-hinh.html">ĐẶC ĐIỂM ĐỊA HÌNH</a></li>
                            <li><a href="tho-nhuong.html">THỔ NHƯỠNG</a></li>
                            <li><a href="tham-phu-thuc-vat.html">THẢM PHỦ THỰC VẬT RỪNG VÀ HỆ THỰC VẬT</a></li>
                            <li><a href="he-thong-song-ngoi.html">HỆ THỐNG SÔNG NGÒI</a></li>
                        </ul>
                    </li>
                    <li><a href="#">HIỆN TRẠNG KHAI THÁC, SỬ DỤNG ĐẤT VEN SÔNG</a></li>
                </ul>
            </li>
            <li><a href="#">DỮ LIỆU ĐỀ TÀI</a></li>
            <li><a href="#">HIỆN TƯỢNG SẠT LỞ BỜ SÔNG</a></li>
        </ul>
        <div class="content-right">
            <div class="scheme">
                <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Tên đề tài</h3>
                <div class="name">
                    <h4>Nghiên cứu dự báo diễn biến sạt lở, đề xuất các giải pháp để ổn định bờ sông và quy hoạch sử dụng vùng ven sông phục vụ mục tiêu phát triển kinh tế - xã hội vùng hạ du hệ thống sông Đồng Nai</h4>
                    <i>Thuộc: Chương trình KC.08.28/16-20</i>
                </div>
                <h3 class="time"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Thời gian thực hiện (30 tháng)</h3>
                <img src="{{ asset('images/thoi-gian-thuc-hien.PNG')}}" alt="thoi-gian-thuc-hien">

                <h3 class="director"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Chủ nhiệm đề tài:</h3><strong>&nbsp;GS.TS. Phạm Thị Hương Lan</strong><br><br>
                <h3 class="organization"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Tổ chức chủ trì nhiệm vụ:</h3><strong>&nbsp;Viện Thủy văn Môi trường và Biến đổi khí hậu. </strong>
            </div>
        </div>
    </div>
@endsection('content')