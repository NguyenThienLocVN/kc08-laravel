<ul class="sidebar-left" id="sidebar-left-mobile">
    <li><a href="{{ route('trang-chu') }}">TRANG CHỦ</a></li>
    <li class="has-sub"><a href="#">THÔNG TIN CHUNG</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
    <ul class="submenu">
        <li><a href="{{ route('thong-tin-chung.muc-tieu-de-tai') }}">MỤC TIÊU ĐỀ TÀI</a></li>
        <li><a href="{{ route('thong-tin-chung.san-pham-de-tai') }}">SẢN PHẨM ĐỀ TÀI</a></li>
        <li><a href="{{ route('thong-tin-chung.dong-gop-moi-de-tai') }}">ĐÓNG GÓP MỚI CỦA ĐỀ TÀI</a></li>
        <li><a href="#">CÁC SẢN PHẨM ĐÃ CÔNG BỐ</a></li>
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
            <li><a href="{{ route('du-lieu-de-tai.so-lieu-khi-tuong') }}">SỐ LIỆU KHÍ TƯỢNG</a></li>
            <li><a href="#">SỐ LIỆU THỦY VĂN</a></li>
            <li><a href="{{ route('du-lieu-de-tai.so-lieu-bun-cat') }}">SỐ LIỆU BÙN CÁT</a></li>
            <li><a href="#">SỐ LIỆU CÔNG TRÌNH</a></li>
        </ul>
    <li><a href="{{ route('hien-trang-sat-lo-2020') }}">HIỆN TƯỢNG SẠT LỞ BỜ SÔNG</a></li>
</ul>

<ul class="sidebar-left" id="sidebar-left-desktop">
    <li><a href="#" class="item-link">THÔNG TIN CHUNG</a><i class="fa fa-caret-down" aria-hidden="true"></i>
        <ul class="submenu">
            <li><a href="{{ route('thong-tin-chung.muc-tieu-de-tai') }}">Mục tiêu đề tài</a></li>
            <li><a href="{{ route('thong-tin-chung.san-pham-de-tai') }}">Sản phẩm đề tài</a></li>
            <li><a href="{{ route('thong-tin-chung.dong-gop-moi-de-tai') }}">Đóng góp mới của đề tài</a></li>
            <li><a href="#">Các sản phẩm đã công bố</a></li>
        </ul>
    </li>
    <li><a href="#" class="item-link">KHU VỰC NGHIÊN CỨU</a><i class="fa fa-caret-down" aria-hidden="true"></i>
        <ul class="submenu">
            <li><a href="#">Đặc điểm điều kiện tự nhiên</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="sub-submenu">
                    <li><a href="{{ route('khu-vuc-nghien-cuu.vi-tri-dia-ly') }}">Vị trí địa lý</a></li>
                    <li><a href="{{ route('khu-vuc-nghien-cuu.dac-diem-dia-hinh') }}">Đặc điểm địa hình</a></li>
                    <li><a href="{{ route('khu-vuc-nghien-cuu.tho-nhuong') }}">Thổ nhưỡng</a></li>
                    <li><a href="{{ route('khu-vuc-nghien-cuu.tham-phu-thuc-vat') }}">Thảm phủ thực vật rừng và hệ thực vật</a></li>
                    <li><a href="{{ route('khu-vuc-nghien-cuu.he-thong-song-ngoi') }}">Hệ thống sông ngòi</a></li>
                </ul>
            </li>
            <li><a href="#">Hiện trạng khai thác, sử dụng đất ven sông</a></li>
        </ul>
    </li>
    <li><a href="#" class="item-link">DỮ LIỆU ĐỀ TÀI</a><i class="fa fa-caret-down" aria-hidden="true"></i>
        <ul class="submenu scheme-data-ul">
            <li><a href="{{ route('du-lieu-de-tai.so-lieu-khi-tuong') }}">Số liệu khí tượng</a></li>
            <li><a href="#">Số liệu thủy văn</a></li>
            <li><a href="{{ route('du-lieu-de-tai.so-lieu-bun-cat') }}">Số liệu bùn cát</a></li>
            <li><a href="#">Số liệu công trình</a></li>
        </ul>
    </li>
    <li><a href="#" class="item-link">HIỆN TRẠNG SẠT LỞ BỜ SÔNG</a><i class="fa fa-caret-down" aria-hidden="true"></i>
        <ul class="submenu scheme-data-ul">
            <li><a href="{{ route('hien-trang-sat-lo-2020') }}">Sạt lở hiện trạng 2020</a></li>
            <li><a href="{{ route('hien-trang-sat-lo-2025') }}">Sạt lở hiện trạng 2025</a></li>
        </ul>
    </li>
    <li><a href="{{ route('ban-do-nguy-co-sat-lo') }}" class="item-link">BẢN ĐỒ NGUY CƠ SẠT LỞ</a></li>
</ul>