@section('title', 'Nguy cơ sạt lở | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content landslide-risk">
    <h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Bản đồ nguy cơ sạt lở</h3>

    <ol class="landslide-risk-list-pdf">
        <li><a href="{{ asset('files/Bando_QH_3PA.pdf') }}">Bản đồ quy hoạch 3 PA</a></li>
        <li><a href="{{ asset('files/Giamsat_dongnai.pdf') }}">Giám sát Đồng Nai</a></li>
        <li><a href="{{ asset('files/Giamsat_Thanhda.pdf') }}">Giám sát Thanhda</a></li>
        <li><a href="{{ asset('files/Nguyco_SatLo.pdf') }}">Nguy cơ sạt lở</a></li>
        <li><a href="{{ asset('files/QH_HT_CucBo.pdf') }}">Quy hoạch hệ thống cục bộ</a></li>
        <li><a href="{{ asset('files/QH_toandien.pdf') }}">Quy hoạch toàn diện</a></li>
    </ol>
</div>
@endsection('content')