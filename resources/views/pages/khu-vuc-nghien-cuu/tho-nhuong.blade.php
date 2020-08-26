@section('title', 'Thổ nhưỡng | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content land">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Thổ nhưỡng</h3>
    <div class="content">
        <div class="main-content">
            <div class="description">
                <div class="file-action">
                    <a href="{{ asset('files/3-tho-nhuong.docx') }}"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Tải xuống</a>
                    <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i>&nbsp;Xem trước</a>
                </div>
                <p class="text-justify">Đặc điểm thổ nhưỡng lưu vực sông Đồng Nai nằm trong lãnh thổ Tây Nguyên thay đổi tuỳ theo địa hình và nham thạch gốc. Do nằm trong vùng có địa hình và địa chất biến đổi phức tạp vì vậy thổ nhưỡng trên lưu vực cũng rất đa dạng, bao gồm 5 nhóm đất chính: Đất đen, Đất đỏ vàng, Đất mùn trên núi, Đất dốc tụ, Đất xói mòn trơ sỏi đá.</p>
                <p class="text-justify">Trong đó, nhóm đất đỏ vàng có diện tích lớn nhất gần 3 triệu ha, chiếm trên 51% diện tích tự nhiên, kế đến là nhóm đất xám khoảng 1,2 triệu ha, chiếm gần 23% diện tích tự nhiên, còn các đất khác chiếm khoảng 19%. Các loại đất có vấn đề (đất cát,đất mặn, đất phèn, đất trơ sỏi đá) chiếm gần 10% diện tích tự nhiên. </p>

                <p class="text-justify">Cao độ địa hình thấp dần theo 3 hướng chính là Bắc-Nam (thượng lưu xuống hạ lưu dòng chính Đồng Nai), Đông-Tây (dòng chính Đồng Nai qua sông Bé, sông Sài Gòn và Vàm Cỏ) và Tây Bắc-Đông Nam (vùng ven biển) bao gồm nhiều loại: địa hình vùng núi, trung du, đồng bằng, và vùng ven biển. </p>
                
            </div>
            <div class="img-location text-center">
                <img src="{{ asset('images/tho-nhuong.png')  }}" alt="tho-nhuong"><br>
                <i>Bản đồ thổ nhưỡng Việt Nam</i>
            </div>
        </div>
        
    </div>
</div>
@endsection('content')