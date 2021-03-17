<!-- menu cho dien thoai -->
<ul class="sidebar-left" id="sidebar-left-mobile"> 
    <li><a href="{{ route('trang-chu') }}">TRANG CHỦ</a></li>
    <li class="has-sub"><a href="#">THÔNG TIN CHUNG</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
    <ul class="submenu">
        <li><a href="#">MỤC TIÊU ĐỀ TÀI</a><i class="fa fa-caret-down" aria-hidden="true"></i>
            <ul class="sub-submenu">
                <li><a href="{{ route('thong-tin-chung.muc-tieu-chung') }}">Mục tiêu chung</a></li>
                <li><a href="{{ route('thong-tin-chung.muc-tieu-cu-the') }}">Mục tiêu cụ thể</a></li>
            </ul>
        </li>
        <li><a href="{{ route('thong-tin-chung.san-pham-de-tai') }}">SẢN PHẨM ĐỀ TÀI</a></li>
        <li><a href="{{ route('thong-tin-chung.dong-gop-moi-de-tai') }}">ĐÓNG GÓP MỚI CỦA ĐỀ TÀI</a></li>
        <li><a href="#">CÁC SẢN PHẨM ĐÃ CÔNG BỐ</a></li>
    </ul>
    <li class="has-sub"><a href="#">GIỚI THIỆU KHU VỰC NGHIÊN CỨU</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
    <ul class="submenu">
        <li class="has-sub-sub"><a href="#">ĐẶC ĐIỂM ĐIỀU KIỆN TỰ NHIÊN</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
        <ul class="sub-submenu">
            <li><a href="{{ url('/khu-vuc-nghien-cuu/vi-tri-dia-ly') }}">VỊ TRÍ ĐỊA LÝ</a></li>
            <li><a href="{{ url('/khu-vuc-nghien-cuu/dac-diem-dia-hinh') }}">ĐẶC ĐIỂM ĐỊA HÌNH</a></li>
            <li><a href="{{ url('/khu-vuc-nghien-cuu/tho-nhuong') }}">THỔ NHƯỠNG</a></li>
            <li><a href="{{ url('/khu-vuc-nghien-cuu/tham-phu-thuc-vat') }}">THẢM PHỦ THỰC VẬT RỪNG VÀ HỆ THỰC VẬT</a></li>
            <li><a href="{{ url('/khu-vuc-nghien-cuu/he-thong-song-ngoi') }}">HỆ THỐNG SÔNG NGÒI</a></li>
        </ul>
        <li><a href="#">HIỆN TRẠNG KHAI THÁC, SỬ DỤNG ĐẤT VEN SÔNG</a></li>
    </ul>
    <li class="has-sub"><a href="#">DỮ LIỆU ĐỀ TÀI</a><i class="fa fa-caret-right" aria-hidden="true"></i></li>
    <ul class="submenu">
            <li><a href="{{ route('du-lieu-de-tai.so-lieu-khi-tuong') }}">SỐ LIỆU KHÍ TƯỢNG</a></li>
            <li><a href="{{ route('du-lieu-de-tai.so-lieu-thuy-van') }}">SỐ LIỆU THỦY VĂN</a></li>
            <li><a href="{{ route('du-lieu-de-tai.so-lieu-bun-cat') }}">SỐ LIỆU BÙN CÁT</a></li>
            <li><a href="#">SỐ LIỆU CÔNG TRÌNH</a></li>
        </ul>
    <li><a href="{{ route('hien-trang-sat-lo-2020') }}">HIỆN TƯỢNG SẠT LỞ BỜ SÔNG</a></li>
</ul>

<!-- menu cho laptop -->
<ul class="sidebar-left" id="sidebar-left-desktop">
    <li><a href="#" class="item-link">THÔNG TIN CHUNG</a><i class="fa fa-caret-down" aria-hidden="true"></i>
        <ul class="submenu">
            <li><a href="#">Mục tiêu đề tài</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="sub-submenu">
                    <li><a href="{{ route('thong-tin-chung.muc-tieu-chung') }}">Mục tiêu chung</a></li>
                    <li><a href="{{ route('thong-tin-chung.muc-tieu-cu-the') }}">Mục tiêu cụ thể</a></li>
                </ul>
            </li>
            <!-- thêm menucon của muc tieu de tai -->

            <li><a href="{{ route('thong-tin-chung.san-pham-de-tai') }}">Sản phẩm đề tài</a><i class="fa fa-caret-right" aria-hidden="true"></i> 

            <!-- cho mũi tên bên phải <i class="fa fa-caret-right" aria-hidden="true"></i> -->
            <ul class="sub-submenu">
                    <li><a href="{{ route('thong-tin-chung.san-pham-1') }}"> Phân tích quá trình DBLD ĐNSG </a></li>
                    <li><a href="{{ route('thong-tin-chung.san-pham-2') }}"> Phân tích quan hệ thủy văn thủy lực </a></li>
                    <li><a href="{{ route('thong-tin-chung.san-pham-3') }}"> Kết quả dự báo sạt lở bờ sông </a></li>
                    <li><a href="{{ route('thong-tin-chung.san-pham-4') }}"> Bản đồ khu vực có nguy cơ sạt lở cao </a></li>
                    <li><a href="{{ route('thong-tin-chung.san-pham-5') }}"> Giải pháp KHCN chống sạt lở </a></li>
                    <li><a href="{{ route('thong-tin-chung.san-pham-6') }}"> Thiết kế sơ bộ công trình chống sạt lở </a></li>
                </ul>
            </li>

            <li><a href="{{ route('thong-tin-chung.dong-gop-moi-de-tai') }}">Đóng góp mới của đề tài</a></li> 
            <li><a href="{{ route('thong-tin-chung.hieu-qua-de-tai') }}">Hiệu quả của đề tài</a></li>
            <li><a href="{{ route('thong-tin-chung.cach-tiep-can') }}">Cách tiếp cận - phương pháp nghiên cứu</a></li> 
            <li><a href="{{ route('thong-tin-chung.bai-bao') }}">Bài báo đã công bố</a></li>
<!-- cho mũi tên bên phải <i class="fa fa-caret-right" aria-hidden="true"></i> -->
            <ul class="sub-submenu">
                    <li><a href="{{ route('thong-tin-chung.Bai_01') }}"> Sci.272-022219 </a></li>
                    <li><a href="{{ route('thong-tin-chung.Bai_02') }}"> Sci.272-022221 </a></li>
                    <li><a href="{{ route('thong-tin-chung.Bai_03') }}"> Xác định hành lang bảo vệ </a></li>
                    <li><a href="{{ route('thong-tin-chung.Bai_04') }}"> Phương pháp chỉ số biến đổi thủy văn </a></li>
                    <li><a href="{{ route('thong-tin-chung.Bai_05') }}"> Phương pháp phân tích cấp bậc </a></li>
                    <li><a href="{{ route('thong-tin-chung.Bai_06') }}"> Phân vùng nguy cơ xói lở bờ sông </a></li>
                </ul>
            </li>

            <li><a href="{{ route('thong-tin-chung.bao-cao-tong-hop') }}">Báo cáo tổng hợp</a></li> 
            <li><a href="{{ route('thong-tin-chung.bao-cao-tom-tat') }}">Báo cáo tóm tắt</a></li> 
            <li><a href="#">Các sản phẩm của đề tài</a></li>
        </ul>
    </li>
    <!-- hết mục thông tin chung -->

    <li><a href="#" class="item-link">KHU VỰC NGHIÊN CỨU</a><i class="fa fa-caret-down" aria-hidden="true"></i>
        <ul class="submenu">
            <li><a href="#">Đặc điểm điều kiện tự nhiên</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="sub-submenu">
                    <li><a href="{{ url('/khu-vuc-nghien-cuu/vi-tri-dia-ly') }}">Vị trí địa lý</a></li>
                    <li><a href="{{ url('/khu-vuc-nghien-cuu/dac-diem-dia-hinh') }}">Đặc điểm địa hình</a></li>
                    <li><a href="{{ url('/khu-vuc-nghien-cuu/tho-nhuong') }}">Thổ nhưỡng</a></li>
                    <li><a href="{{ url('/khu-vuc-nghien-cuu/tham-phu-thuc-vat') }}">Thảm phủ thực vật rừng và hệ thực vật</a></li>
                    <li><a href="{{ url('/khu-vuc-nghien-cuu/he-thong-song-ngoi') }}">Hệ thống sông ngòi</a></li>
                </ul>
            </li>
            <li><a href="#">Hiện trạng khai thác, sử dụng đất ven sông</a></li>
        </ul>
    </li>
    

    <!-- hết khu vực nghiên cứu -->
    <li><a href="#" class="item-link">DỮ LIỆU ĐỀ TÀI</a><i class="fa fa-caret-down" aria-hidden="true"></i>
        <ul class="submenu scheme-data-ul">
            <li><a href="#">Số liệu khí tượng thủy văn </a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="sub-submenu">
                    <li><a href="{{ url('/du-lieu-de-tai/so-lieu-khi-tuong') }}">Số liệu khí tượng </a></li>
                    <li><a href="{{ url('/du-lieu-de-tai/so-lieu-thuy-van') }}">Số liệu thủy văn </a></li>
                    <li><a href="{{ url('/du-lieu-de-tai/so-lieu-bun-cat') }}">Số liệu bùn cát </a></li>
                </ul>
            </li>

            <li><a href="#">Số liệu địa hình </a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="sub-submenu">
                    <li><a href="{{ url('/so-lieu-dia-hinh/so-lieu-binh-do-long-dan') }}">Số liệu bình đồ lòng dẫn </a></li>
                    <li><a href="{{ url('/so-lieu-dia-hinh/so-lieu-mat-cat-ngang') }}">Số liệu mặt cắt ngang </a></li>
                    <li><a href="{{ url('/so-lieu-dia-hinh/so-lieu-mat-cat-doc') }}">Số liệu mặt cắt dọc </a></li>
                </ul>

            <li><a href="#">Số liệu hồ chứa </a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="sub-submenu">
                    <li><a href="{{ url('/so-lieu-ho-chua/So-do-ho-chua') }}">Sơ đồ hệ thống hồ chứa thượng nguồn </a></li>
                    <li><a href="{{ url('/so-lieu-ho-chua/van-hanh-ho-chua') }}">Vận hành hồ chứa </a></li>
                    <li><a href="{{ url('/so-lieu-ho-chua/Thong-so-ho-chua') }}">Thông số hồ chứa </a></li>
                </ul>

            <li><a href="#">Công trình cầu, cống </a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="sub-submenu">
                    <li><a href="{{ url('/so-lieu-cau-cong/cong-trinh-cau') }}">Hệ thống công trình cầu qua sông </a></li>
                    <li><a href="{{ url('/so-lieu-cau-cong/cong-trinh-cong') }}">Hệ thống cống </a></li>
                    <li><a href="{{ url('/so-lieu-cau-cong/cong-trinh-chong-ngap') }}">Hệ thống công trình chống ngập </a></li>
                </ul>

                <li><a href="#">Hiện trạng kinh tế xã hội </a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="sub-submenu">
                    <li><a href="{{ url('/hien-trang-kinh-te/cong-trinh-cau') }}">Hệ thống công trình cầu qua sông </a></li>
                    <li><a href="{{ url('/hien-trang-kinh-te/cong-trinh-cong') }}">Hệ thống cống </a></li>
                    <li><a href="{{ url('/hien-trang-kinh-te/cong-trinh-chong-ngap') }}">Hệ thống công trình chống ngập </a></li>
                </ul>

                <li><a href="#">Kịch bản BĐKH-NBD </a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="sub-submenu">
                    <li><a href="{{ url('/kich-ban-khi-hau/hien-trang-khi-hau') }}">Hiện trạng khí hậu </a></li>
                    <li><a href="{{ url('/kich-ban-khi-hau/kich-ban-bdkh') }}">Kịch bản BĐKH </a></li>
                    <li><a href="{{ url('/kich-ban-khi-hau/NBD') }}">Kịch bản NBD </a></li>
                </ul>
            </li>


        </ul>
    </li>
    <li><a href="#" class="item-link">HIỆN TRẠNG SẠT LỞ BỜ SÔNG</a><i class="fa fa-caret-down" aria-hidden="true"></i>
        <ul class="submenu scheme-data-ul">
            <li><a href="{{ route('hien-trang-sat-lo-2020') }}">Sạt lở hiện trạng 2020</a></li>
            <li><a href="{{ route('hien-trang-sat-lo-2025') }}">Sạt lở hiện trạng 2025</a></li>
        </ul>
    </li>
    <li><a href="{{ route('ban-do-nguy-co-sat-lo') }}" class="item-link">BẢN ĐỒ NGUY CƠ SẠT LỞ</a></li>

    <li><a href="#" class="item-link">SỔ TAY HƯỚNG DẪN QUẢN LÝ BỜ SÔNG </a><i class="fa fa-caret-down" aria-hidden="true"></i>
        <ul class="submenu">
            <li><a href="{{ route('so-tay-huong-dan-phan-1') }}">Phần 1: Hướng dẫn chung</a><i class="fa fa-caret-right" aria-hidden="true"></i>
            <li><a href="{{ route('so-tay-huong-dan-phan-2') }}">Phần 2: Hướng dẫn xác định hành lang BVBS</a><i class="fa fa-caret-right" aria-hidden="true"></i>   
            <li><a href="{{ route('so-tay-huong-dan-phan-3') }}">Phần 3: Hướng dẫn quản lý sử dụng hành lang BVBS</a><i class="fa fa-caret-right" aria-hidden="true"></i>
            <li><a href="{{ route('so-tay-huong-dan-phan-4') }}">Phần 4: Phạm vi hành lang bảo vệ </a><i class="fa fa-caret-right" aria-hidden="true"></i>
            <li><a href="{{ route('so-tay-huong-dan-phan-5') }}">Phần 5: Phân cấp kỹ thuật đường thủy nội địa</a><i class="fa fa-caret-right" aria-hidden="true"></i>
            </li>
            <li><a href="#">Hiện trạng khai thác, sử dụng đất ven sông</a></li>
        </ul>
    </li>
    
</ul>