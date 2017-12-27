@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li class="active">Komentar</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Tampilan Komentar</h2>
					</div>

					

					<div class="panel-body">
						<table class="table">
							<tbody>
								
							</tbody>
						</table>
						<a class="btn btn-primary" href="{{ url('/settings/profile/edit') }}">Ubah</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection