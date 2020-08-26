@section('title', 'Hệ thống sông ngòi | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content river-system">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Hệ thống sông ngòi</h3>
    <div class="content">
        <div class="main-content">
            <div class="description">
                <div class="file-action">
                    <a href="{{ asset('files/5-he-thong-song-ngoi.docx') }}"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Tải xuống</a>
                    <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i>&nbsp;Xem trước</a>
                </div>
                <p class="text-justify">Hệ thống sông Đồng Nai là hệ thống sông nội địa lớn nhất nước ta, gồm dòng chính sông Đồng Nai và các phụ lưu chính là sông La Ngà, Bé, Sài Gòn và Vàm Cỏ (bao gồm Vàm Cỏ Đông và Vàm Cỏ Tây).</p>
                <p class="text-justify">- Sông Đồng Nai bắt nguồn từ cao nguyên Lang Biang (Đà Lạt) với độ cao 1.777m, diện tích lưu vực đến Trị An và Nhà Bè tương ứng là 14.800 km2 và 28.200 km2. </p>
                <p class="text-justify">- Sông Sài Gòn được hợp thành từ hai nhánh Sài Gòn và Sanh Đôi, bắt nguồn từ các vùng đồi ở Lộc Ninh và ven biên giới Việt Nam - Cam Pu Chia, với độ cao khoảng 100-150 m. </p>
                <p class="text-justify">- Sông Nhà Bè: Sông Đồng Nai hợp lưu với sông Sài Gòn thành sông Nhà Bè, cách trung tâm thành phố khoảng 5 km về phía Đông Nam. </p>
                <p class="text-justify">- Sông La Ngà là phụ lưu nằm ở bờ trái dòng chính Đồng Nai, bắt nguồn từ hai nhánh Da R’gna và Da Riam từ vùng núi cao 1.500-1.600 m của Di Linh và 1.300 m của Bảo Lâm, chảy qua rìa phía Tây tỉnh Bình Thuận rồi đổ vào dòng chính sông Đồng Nai tại vị trí cách thác Trị An 38 km về phía thượng lưu. </p>
                <p class="text-justify">- Sông Vàm Cỏ được hình thành bởi hai sông Vàm Cỏ Đông và Vàm Cỏ Tây, bắt nguồn từ vùng đồi thấp ở Căm Pu Chia, có cao độ khoảng 20 m đầu nguồn Vàm Cỏ Đông và 5 m đầu nguồn Vàm Cỏ Tây. </p>
                <p class="text-justify">- Sông Vàm Cỏ Đông có chiều dài 220 km, diện tích lưu vực đến Gò Dầu Hạ là 5.650 km2 và 6.300 km2 tại hợp lưu với Vàm Cỏ Tây, chảy theo hướng Tây Bắc-Đông Nam, độ dốc trung bình lòng sông 0,0002, lòng sông sâu, thuỷ triều ảnh hưởng đến tận biên giới Việt Nam-Căm Pu Chia.</p>
                <p class="text-justify">- Sông Vàm Cỏ Tây có chiều dài 196 km, độ dốc trung bình lòng sông 0,00012, diện tích lưu vực đến hợp lưu với Vàm Cỏ Đông khoảng 6.000 km2, sông chảy qua vùng đồng bằng tỉnh Long An, chịu tác động của thuỷ triều</p>
                <p class="text-justify">- Ngoài ra, còn có nhiều sông, suối với lưu vực độc lập chảy trực tiếp ra dòng chính sông Đồng Nai như Dak R’Tih (Dak Nông), Da Tẻh, Dak Quyeon (Lâm Đồng), sông Lá Buông (Đồng Nai)... </p>
            </div>
            <div class="img-location text-center">
                <img src="{{ asset('images/he-thong-song-ngoi.png')  }}" alt="dac-diem-dia-hinh"><br>
                <i class="mt-2 d-block">Bản đồ hệ thống sông ngòi</i>
            </div>
        </div>
    </div>
</div>
@endsection('content')