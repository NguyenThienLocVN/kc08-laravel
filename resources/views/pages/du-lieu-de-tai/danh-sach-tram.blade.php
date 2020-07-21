@extends('pages.base')

<?php
    $inputFileName = public_path()."/files/Danhsach.xlsx";

    /**  Identify the type of $inputFileName  **/
    $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);

    /**  Create a new Reader of the type that has been identified  **/
    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);

    /**  Load $inputFileName to a Spreadsheet Object  **/
    $spreadsheet = $reader->load($inputFileName);
    $resultSheet = $spreadsheet->getActiveSheet()->toArray();
?>

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
            <li><a href="#">DỮ LIỆU ĐỀ TÀI</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="submenu">
                    <li><a href="#">SỐ LIỆU KHÍ TƯỢNG</a></li>
                    <li><a href="#">SỐ LIỆU THỦY VĂN</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                        <ul class="sub-submenu">
                            <li><a href="{{ route('du-lieu-de-tai.danh-sach-tram') }}">DANH SÁCH TRẠM</a></li>
                            <li><a href="so-lieu-quan-trac.html">SỐ LIỆU QUAN TRẮC</a></li>
                        </ul>
                    </li>
                    <li><a href="#">SỐ LIỆU BÙN CÁT</a></li>
                    <li><a href="#">SỐ LIỆU CÔNG TRÌNH</a></li>
                </ul>
            </li>
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
            <li><a href="#">DỮ LIỆU ĐỀ TÀI</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                <ul class="submenu">
                    <li><a href="#">SỐ LIỆU KHÍ TƯỢNG</a></li>
                    <li><a href="#">SỐ LIỆU THỦY VĂN</a><i class="fa fa-caret-right" aria-hidden="true"></i>
                        <ul class="sub-submenu">
                            <li><a href="{{ route('du-lieu-de-tai.danh-sach-tram') }}">DANH SÁCH TRẠM</a></li>
                            <li><a href="so-lieu-quan-trac.html">SỐ LIỆU QUAN TRẮC</a></li>
                        </ul>
                    </li>
                    <li><a href="#">SỐ LIỆU BÙN CÁT</a></li>
                    <li><a href="#">SỐ LIỆU CÔNG TRÌNH</a></li>
                </ul>
            </li>
            <li><a href="#">HIỆN TƯỢNG SẠT LỞ BỜ SÔNG</a></li>
        </ul>
        <div class="content-right">
            <div class="list-station">
                <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Danh sách trạm</h3>
                <div>

                <table>
                @foreach( $resultSheet as $single_schedule )          
                    <tr class="row">
                        @foreach( $single_schedule as $single_item )
                            <td class="item">{{ $single_item }}</td>
                        @endforeach
                        
                        <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                    </tr>
                @endforeach

                </table>
                </div>
            </div>
        </div>
    </div>
@endsection('content')