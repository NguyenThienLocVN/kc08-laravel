@section('title', 'Báo cáo tóm tắt | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content common-target">
	<h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Báo cáo tóm tắt dết quả nghiên cứu của đề tài</h3>
	<iframe src="{{ asset('files/BAOCAOTOMTAT_LAN29.pdf') }}" style="width:100%;height:600px;"></iframe>    
</div>
@endsection('content')