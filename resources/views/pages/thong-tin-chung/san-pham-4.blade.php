@section('title', 'Mục tiêu chung | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content common-target">
	<h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Bản đồ về các khu vực có nguy cơ sạt lở cao tỷ lệ 1:5000÷1:10000</h3>
	<iframe src="{{ asset('files/sanpham04.pdf') }}" style="width:100%;height:600px;"></iframe>    
</div>
@endsection('content')