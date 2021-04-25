@section('title', 'Mục tiêu chung | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content common-target">
	<h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Báo cáo kết quả dự báo sạt lở bờ sông vùng hạ du hệ thống sông Đồng Nai điều kiện hiện tại và có xét đến ảnh hưởng của BĐKH- NBD</h3>
	<iframe src="{{ asset('files/sanpham03.pdf') }}" style="width:100%;height:600px;"></iframe>    
</div>
@endsection('content')