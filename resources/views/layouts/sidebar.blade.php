<ul class="sidebar-left" id="sidebar-left-mobile">
    <li><a href="{{ route('trang-chu') }}">TRANG CHỦ</a></li>
    <li class="has-sub"><a href="#">THÔNG TIN CHUNG</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
    <ul class="submenu">
        <li><a href="{{ route('thong-tin-chung.muc-tieu-de-tai') }}">MỤC TIÊU ĐỀ TÀI</a></li>
        <li><a href="{{ route('thong-tin-chung.san-pham-de-tai') }}">SẢN PHẨM ĐỀ TÀI</a></li>
        <li><a href="{{ route('thong-tin-chung.dong-gop-moi-de-tai') }}">ĐÓNG GÓP MỚI CỦA ĐỀ TÀI</a></li>
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
            <li><a href="{{ route('khu-vuc-nghien-cuu.vi-tri-dia-ly') }}">VỊ TRÍ ĐỊA LÝ</a></li>
            <li><a href="{{ route('khu-vuc-nghien-cuu.dac-diem-dia-hinh') }}">ĐẶC ĐIỂM ĐỊA HÌNH</a></li>
            <li><a href="{{ route('khu-vuc-nghien-cuu.tho-nhuong') }}">THỔ NHƯỠNG</a></li>
            <li><a href="{{ route('khu-vuc-nghien-cuu.tham-phu-thuc-vat') }}">THẢM PHỦ THỰC VẬT RỪNG VÀ HỆ THỰC VẬT</a></li>
            <li><a href="{{ route('khu-vuc-nghien-cuu.he-thong-song-ngoi') }}">HỆ THỐNG SÔNG NGÒI</a></li>
        </ul>
        <li><a href="#">HIỆN TRẠNG KHAI THÁC, SỬ DỤNG ĐẤT VEN SÔNG</a></li>
    </ul>
    <li class="has-sub"><a href="#">DỮ LIỆU ĐỀ TÀI</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
    <ul class="submenu">
            <li><a href="#">SỐ LIỆU KHÍ TƯỢNG</a></li>
            <li class="has-sub-sub"><a href="#">SỐ LIỆU THỦY VĂN</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
            <ul class="sub-submenu">
                <li><a href="{{ route('du-lieu-de-tai.danh-sach-tram') }}">DANH SÁCH TRẠM</a></li>
                <li><a href="{{ route('du-lieu-de-tai.so-lieu-quan-trac') }}">SỐ LIỆU QUAN TRẮC</a></li>
            </ul>
            <li><a href="#">SỐ LIỆU BÙN CÁT</a></li>
            <li><a href="#">SỐ LIỆU CÔNG TRÌNH</a></li>
        </ul>
    <li><a href="{{ route('hien-tuong-sat-lo') }}">HIỆN TƯỢNG SẠT LỞ BỜ SÔNG</a></li>
</ul>
<ul class="sidebar-left" id="sidebar-left">
    <li><a href="#">THÔNG TIN CHUNG</a><i class="fa fa-caret-right" aria-hidden="true"></i>
        <ul class="submenu">
            <li><a href="{{ route('thong-tin-chung.muc-tieu-de-tai') }}">MỤC TIÊU ĐỀ TÀI</a></li>
            <li><a href="{{ route('thong-tin-chung.san-pham-de-tai') }}">SẢN PHẨM ĐỀ TÀI</a></li>
            <li><a href="{{ route('thong-tin-chung.dong-gop-moi-de-tai') }}">ĐÓNG GÓP MỚI CỦA ĐỀ TÀI</a></li>
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
                    <li><a href="{{ route('khu-vuc-nghien-cuu.vi-tri-dia-ly') }}">VỊ TRÍ ĐỊA LÝ</a></li>
                    <li><a href="{{ route('khu-vuc-nghien-cuu.dac-diem-dia-hinh') }}">ĐẶC ĐIỂM ĐỊA HÌNH</a></li>
                    <li><a href="{{ route('khu-vuc-nghien-cuu.tho-nhuong') }}">THỔ NHƯỠNG</a></li>
                    <li><a href="{{ route('khu-vuc-nghien-cuu.tham-phu-thuc-vat') }}">THẢM PHỦ THỰC VẬT RỪNG VÀ HỆ THỰC VẬT</a></li>
                    <li><a href="{{ route('khu-vuc-nghien-cuu.he-thong-song-ngoi') }}">HỆ THỐNG SÔNG NGÒI</a></li>
                </ul>
            </li>
            <li><a href="#">HIỆN TRẠNG KHAI THÁC, SỬ DỤNG ĐẤT VEN SÔNG</a></li>
        </ul>
    </li>
    <li><a href="#">DỮ LIỆU ĐỀ TÀI</a><i class="fa fa-caret-right" aria-hidden="true"></i>
        <ul class="submenu">
            <li><a href="#">SỐ LIỆU KHÍ TƯỢNG</a></li>
            <li><a href="#">SỐ LIỆU THỦY VĂN</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="sub-submenu">
                    <li><a href="{{ route('du-lieu-de-tai.danh-sach-tram') }}">DANH SÁCH TRẠM</a></li>
                    <li><a href="{{ route('du-lieu-de-tai.so-lieu-quan-trac') }}">SỐ LIỆU QUAN TRẮC</a></li>
                </ul>
            </li>
            <li><a href="#">SỐ LIỆU BÙN CÁT</a></li>
            <li><a href="#">SỐ LIỆU CÔNG TRÌNH</a></li>
        </ul>
    </li>
    <li><a href="{{ route('hien-tuong-sat-lo') }}">HIỆN TƯỢNG SẠT LỞ BỜ SÔNG</a></li>
</ul>