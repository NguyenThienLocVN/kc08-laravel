@section('title', 'Đặc điểm địa hình | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content topographic-characteristics">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Đặc điểm địa hình</h3>
    <div class="content">
        <div class="main-content">
            <div class="description">
                <div class="file-action">
                    <a href="{{ asset('files/2-dac-diem-dia-hinh.docx') }}"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Tải xuống</a>
                    <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i>&nbsp;Xem trước</a>
                </div>
                <p class="text-justify">Lưu vực sông Đồng Nai có hình nan quạt kéo dài từ cuối sườn Tây của dãy Trường Sơn thuộc Nam Trung Bộ, qua hết vùng Đông Nam Bộ đến giáp vùng Đồng Tháp Mười thuộc Đồng bằng sông Cửu Long. </p>
                <p class="text-justify">Cao độ địa hình thấp dần theo 3 hướng chính là Bắc-Nam (thượng lưu xuống hạ lưu dòng chính Đồng Nai), Đông-Tây (dòng chính Đồng Nai qua sông Bé, sông Sài Gòn và Vàm Cỏ) và Tây Bắc-Đông Nam (vùng ven biển) bao gồm nhiều loại: địa hình vùng núi, trung du, đồng bằng, và vùng ven biển. </p>
                <p class="text-justify">Địa hình vùng núi phân bố chủ yếu ở thượng và trung lưu các dòng chính có diện tích chiếm gần 50% diện tích toàn lưu vực và có cao độ mặt đất từ vài trăm mét đến trên 2.000 m so với mực nước biển. Dạng địa hình này phù hợp với cây công nghiệp dài ngày và rau màu. Đây cũng là vùng có diện tích đất lâm nghiệp chiếm tỷ trọng lớn trong lưu vực và là nơi thuận lợi bố trí các công trình khai thác tổng hợp (thuỷ năng và cấp nước) quy mô lớn. </p> 
                <p class="text-justify">Lưu vực sông Đồng Nai là một trong những lưu vực sông lớn của Việt Nam và giữ vai trò vô cùng quan trọng trong phát triển kinh tế - xã hội của đất nước.</p><p> Sông Đồng Nai bắt nguồn từ Cao nguyên Liăng Biăng (Lâm Đồng) chảy qua vùng núi cao nguyên đến hồ Trị An, sau đó chảy ngang qua thành phố Biên Hòa, về thành phố Hồ Chí Minh, đến ngã ba Mũi Đèn Đỏ và hợp lưu với sông Sài Gòn.</p>
            </div>
            <div class="img-location text-center">
                <img src="{{ asset('images/dac-diem-dia-hinh.png')  }}" alt="dac-diem-dia-hinh"><br>
                <i class="mt-2 d-block">Bản đồ địa hình lưu vực sông Đồng Nai - Sài Gòn</i>
            </div>
        </div>
    </div>
    
</div>
@endsection('content')