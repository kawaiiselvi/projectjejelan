@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/books') }}">Input CV</a></li>
				<li class="active">Input CV</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Input CV</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url'=>route('pekerjas.store'), 'method'=>'post', 'files'=>'true','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
					@include('pekerjas._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection