@section('title', 'Vị trí địa lý | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content geographical-location">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Vị trí địa lý</h3>
    <div class="content">
        <div class="main-content">
            <div class="description">
                <div class="file-action">
                    <a href="{{ asset('files/1-vi-tri-dia-ly.docx') }}"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Tải xuống (.docx)</a>
                    <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i>&nbsp;Xem trước</a>
                </div>
                <p>Lưu vực sông Đồng Nai - Sài Gòn nằm trong vùng khí hậu nhiệt đới gió mùa, có lưu vực tích thuỷ đi từ vùng cao nguyên Tây Nguyên đến hết đồng bằng miền Đông Nam Bộ. Tổng diện tích tự nhiên khoảng 43.450 km2 </p>
                <p>Lưu vực sông Đồng Nai là một trong những lưu vực sông lớn của Việt Nam và giữ vai trò vô cùng quan trọng trong phát triển kinh tế - xã hội của đất nước.</p><p> Sông Đồng Nai bắt nguồn từ Cao nguyên Liăng Biăng (Lâm Đồng) chảy qua vùng núi cao nguyên đến hồ Trị An, sau đó chảy ngang qua thành phố Biên Hòa, về thành phố Hồ Chí Minh, đến ngã ba Mũi Đèn Đỏ và hợp lưu với sông Sài Gòn.</p>
            </div>
            <div class="illustration img-location">
                <img src="{{ asset('images/vi-tri-dia-ly.png')  }}" alt="vi-tri-dia-ly-song-dong-nai"><br>
            </div>
        </div>
    </div>
    
</div>
@endsection('content')