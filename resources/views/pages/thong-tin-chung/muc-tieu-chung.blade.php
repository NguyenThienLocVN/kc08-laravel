@section('title', 'Mục tiêu chung | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content common-target">
	<h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Mục tiêu chung</h3>
	<iframe src="{{ asset('files/muc-tieu-chung.pdf') }}" style="width:100%;height:700px;"></iframe>    
</div>
@endsection('content')