@section('title', 'Đóng góp mới đề tài| Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content common-target">
	<h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Đóng góp mới đề tài</h3>
	<iframe src="{{ asset('files/dong-gop-moi-de-tai.pdf') }}" style="width:100%;height:600px;"></iframe>    
</div>
@endsection('content')