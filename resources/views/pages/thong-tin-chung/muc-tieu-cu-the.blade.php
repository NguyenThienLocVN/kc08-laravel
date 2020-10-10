@section('title', 'Mục tiêu cụ thể | Chương trình KC.08/16-20')
@extends('layouts.base')

@section('content')
<div class="content specific-target">
	<h3 class="title"><i class="fa fa-circle" aria-hidden="true"></i>&nbsp;Mục tiêu cụ thể</h3>
	<iframe src="{{ asset('files/muc-tieu-cu-the.pdf') }}" style="width:100%;height:600px;"></iframe>    
</div>
@endsection('content')