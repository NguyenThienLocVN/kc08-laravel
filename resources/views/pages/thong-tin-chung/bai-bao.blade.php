@section('title', 'Bài báo | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content common-target">
	<h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Bài báo</h3>
	<iframe src="{{ asset('files/bai-bao.pdf') }}" style="width:100%;height:600px;"></iframe>    
</div>
@endsection('content')