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

@extends('admin/main')
@section('container')

	<!-- Main -->
	<section id="main" class="container">

		<section class="box">
			<header class="major">
				<h2>Edit Data Anggota Himatif</h2>
				<p>Tahun periode 2019/2020</p>
			</header>
			
			<form method="post" action="/admin/{{ $mahasiswa->id }}" enctype="multipart/form-data">
				@method('patch')
				@csrf
			  <div class="form-group">
			    <label for="nim">NIM</label>
			    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" value="{{ $mahasiswa->NIM }}">
			  </div>
			  <div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $mahasiswa->Nama }}">
			  </div>
			  <div class="form-group">
			    <label for="tahun">Tahun Angkatan</label>
			    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun Angkatan" value="{{ $mahasiswa->Tahun_Angkatan }}">
			  </div>
			  <div class="form-group">
			    <label for="alamat">Alamat</label>
			    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="{{ $mahasiswa->Alamat }}">
			  </div>
			  <div class="form-group">
			    <label for="photo">Upload Photo</label><br>
			    <input type="file" id="inputgambar" name="photo" value="{{ $mahasiswa->Photo }}">
			  </div>
			  <button type="submit" class="btn btn-primary" style="color: #fff;">Ubah Data</button>
			</form>
			
		</section>
		
	</section>
@endsection
