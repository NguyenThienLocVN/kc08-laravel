@section('title', 'Báo cáo tổng hợp | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content common-target">
	<h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp; Báo cáo tổng hợp kết quả đề tài KC08.28/16-20</h3>
	<iframe src="{{ asset('files/BAOCAO_LAN29.pdf') }}" style="width:100%;height:600px;"></iframe>    
</div>
@endsection('content')