<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    <header>
        <div class="container">
            <img src="{{ asset('images/banner.jpg') }}" alt="image-banner" class="image-banner">
            <ul class="text-banner-tablet">
                <li><a href="{{ route('trang-chu') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li><input type="text" name="search-banner-table" id="search-banner-table" class="search-banner-table" placeholder="Nội dung tìm kiếm ..."><i class="fa fa-search" aria-hidden="true"></i></li>
                <li><a href="#">Đăng nhập</a></li>
                <li><a href="#">English</a></li>
                <li><a href="#">Sơ đồ trang</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>

            <ul class="text-banner-mobile">
                <li>
                <input type="text" name="search-banner-mobile" id="search-banner-mobile" class="search-banner-mobile" placeholder="Nội dung tìm kiếm ..."><i class="fa fa-search" aria-hidden="true"></i></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="intro-content">
                <div class="img-background" id="img-background"></div>

                <div class="intro-text">
                    <h2>CHƯƠNG TRÌNH KC.08/16-20 <br>
                        “Nghiên cứu khoa học và công nghệ phục vụ bảo vệ môi trường và phòng tránh thiên tai”
                    </h2>


                    <h2>
                        <div class="container">
                            ĐỀ TÀI <br>
                            NGHIÊN CỨU DỰ BÁO DIỄN BIẾN SẠT LỞ, ĐỀ XUẤT CÁC GIẢI PHÁP ĐỂ ỔN ĐỊNH BỜ SÔNG VÀ QUY HOẠCH SỬ DỤNG VÙNG VEN SÔNG PHỤC VỤ MỤC TIÊU PHÁT TRIỂN KINH TẾ - XÃ HỘI VÙNG HẠ DU HỆ THỐNG SÔNG ĐỒNG NAI
                            <br><br> Mã số: KC.08.28/16-20
                        </div>
                    </h2>
                    <br>
                    <a href="{{ route('trang-chu') }}" class="button-start">BẮT ĐẦU</a>  

                    <div class="info-contact">
                        <p>Mọi thông tin liên hệ :</p>
                        <div class="item">
                            <div class="circle"><i class="fa fa-map-pin" aria-hidden="true"></i></div>
                            <span>175 Tây Sơn</span>
                        </div>
                        <div class="item">
                            <div class="circle"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <span>099 999 9999</span>
                        </div>
                        <div class="item">
                            <div class="circle"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <span>example@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer')
    <!-- Include js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>