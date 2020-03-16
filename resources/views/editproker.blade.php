@extends('admin/main')
@section('container')

	<!-- Main -->
	<section id="main" class="container">

		<section class="box">
			<header class="major" style="margin-top: 50px;">
				<h2>Edit Data Proker Himatif</h2>
				<p>Tahun periode 2019/2020</p>
			</header>
			
			<form method="post" action="/admin_proker/{{ $proker->id }}" enctype="multipart/form-data">
				@method('patch')
				@csrf
			  <div class="form-group">
			    <label for="nim">Nama Proker</label>
			    <input type="text" class="form-control" id="proker" name="proker" value="{{ $proker->Proker }}">
			  </div>
			  <div class="form-group">
			    <label for="nama">Tanggal Pelaksanaan</label>
			    <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $proker->Tanggal_Pelaksanaan }}">
			  </div>
			  <div class="form-group">
			    <label for="tahun">Tempat Pelaksanaan</label>
			    <input type="text" class="form-control" id="tempat" name="tempat" value="{{ $proker->Tempat }}">
			  </div>
			  <button type="submit" class="btn btn-primary" style="color: #fff;">Ubah Data</button>
			</form>
			
		</section>
		
	</section>
@endsection
