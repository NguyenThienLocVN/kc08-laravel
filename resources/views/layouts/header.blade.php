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
            <li><i class="fa fa-align-justify" aria-hidden="true"></i>
            <input type="text" name="search-banner-mobile" id="search-banner-mobile" class="search-banner-mobile" placeholder="Nội dung tìm kiếm ..."><i class="fa fa-search" aria-hidden="true"></i></li>
        </ul>
    </div>
</header>