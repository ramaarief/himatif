@extends('layouts/main')
@section('container')
	<!-- Main -->
	<section id="main" class="container">

		<section class="box special">
			<header class="major">
				<h2>Program Kerja Himatif</h2>
				<p>Tahun periode 2019/2020</p>
			</header>

			<br>
			<br>

			<table>
				<thead class="thead-light">
				<tr>
					<td>Proker</td>
					<td>Tanggal Pelaksanaan</td>
					<td>Tempat</td>
					<td>Ketua Pelaksana</td>
				</tr>
				</thead>
				@foreach($proker as $p)
				<tr>
					<td>{{ $p->Proker }}</td>
					<td>{{ $p->Tanggal_Pelaksanaan }}</td>
					<td>{{ $p->Tempat }}</td>
					<td>
						@foreach($mahasiswa as $mhs)
							@if($p->kapel_id == $mhs->id)
									{{ $mhs->Nama }}
							@endif
						@endforeach
					</td>
				</tr>
				@endforeach
			</table>
		</section>

		<br>
			<h1 style="font-size: 30px;" align="center">Proker Himatif Periode tahun 2019/2020</h1>
		<br>

		<div class="row">
			<div class="col-6 col-12-narrower">

				<section class="box special">
					<span class="image featured"><img src="images/acara3.jpg" alt="" /></span>
					<h3>Makrab Maba TI <br> Tahun 2019</h3>
					<p>Sebuah acara untuk mengumpulkan mahasiswa baru angkatan teknologi informasi agar dapat merekatkan hubungan antar kelas dan angkatan atas.</p>
					<ul class="actions special">
						<li><a href="#" class="button alt">Baca Selengkapnya</a></li>
					</ul>
					<br>
				</section>

			</div>
			<div class="col-6 col-12-narrower">

				<section class="box special">
					<span class="image featured"><img src="images/acara2.jpg" alt="" /></span>
					<h3>First Gathering Staff Muda TI<br> Tahun 2019</h3>
					<p>Sebuah acara untuk mengumpulkan staff muda periode 2019/2020 agar dapat merekatkan hubungan angkatan atas dan dapat mengetahui divisi dalam himpunan.</p>
					<ul class="actions special">
						<li><a href="#" class="button alt">Baca Selengkapnya</a></li>
					</ul>
				</section>

			</div>
		</div>

	</section>
@endsection
