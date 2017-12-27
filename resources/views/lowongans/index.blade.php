@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Lowongan</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Perusahaan</h2>
				</div>
				<div class="panel-body">
					
					<div class="table-responsive">
						<table class="table">
							<tr>
								<td>Nama Perusahaan</td>
							</tr>
							@foreach($lowongan as $data)
							<tr>
								<td><a href="{{route('lowongans.show', $data->id)}}">{{$data->perusahaan}}</a></td>
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection