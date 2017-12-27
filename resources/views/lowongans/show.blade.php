@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/member/lowongans') }}">Lowongan</a></li>
				<li class="active">Detail Perusahaan</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Detail Perusahaan</h2>
				</div>

				<div class="panel-body">
					<div class="col-md-6">
						Nama Perusahaan
					</div>
					<div class="col-md-6">
						{{$lowongan->perusahaan}}
					</div>
					<div class="col-md-6">
						Jabatan
					</div>
					<div class="col-md-6">
						{{$lowongan->jabatan}}
					</div>
					<div class="col-md-6">
						Lokasi
					</div>
					<div class="col-md-6">
						{{$lowongan->lokasi}}
					</div>
					<div class="col-md-6">
						Pendidikan
					</div>
					<div class="col-md-6">
						{{$lowongan->pendidikan}}
					</div>
					<div class="col-md-6">
						Gaji
					</div>
					<div class="col-md-6">
						{{$lowongan->gaji}}
					</div>
					<div>
						<td><a class="btn btn-primary" href="{{ url('/member/civis/') }}">Lamar Pekerjaan</a></td>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection