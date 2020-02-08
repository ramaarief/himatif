@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>

@stop

@extends('layouts/main')
@section('container')

	<!-- Main -->
	<section id="main" class="container">

		<section class="box">
			<header class="major">
				<h2>Data Anggota Himatif</h2>
				<p>Tahun periode 2019/2020</p>
			</header>

			<form method="post" action="/" enctype="multipart/form-data">
				@csrf
			  <div class="form-group">
			    <label for="nim">NIM</label>
			    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM Anda">
			  </div>
			  <div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda">
			  </div>
			  <div class="form-group">
			    <label for="tahun">Tahun Angkatan</label>
			    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun Angkatan Anda">
			  </div>
			  <div class="form-group">
			    <label for="alamat">Alamat</label>
			    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Anda">
			  </div>
			  <div class="form-group">
			    <img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
			  </div>

			  <br>
			  <br>
			  <br>
			  <br>
			  <br>

			  <div class="form-group">
			    <label for="photo">Upload Photo</label><br>
			    <input type="file" id="inputgambar" name="photo">
			  </div>
			  <button type="submit" class="btn btn-primary" style="color: #fff;">Tambah Data</button>
			</form>

		</section>

	</section>
	
@endsection
