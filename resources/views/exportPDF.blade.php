<!DOCTYPE html>
<html>
<head>
	<title>PDF MAHASISWA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h4>Laporan Mahasiswa PDF</h4>
	</center>
 
	<table class='table table-bordered'>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Tahun Angkatan</th>
			<th>Alamat</th>
		</tr>
		</thead>
		@foreach($mahasiswa as $mhs)
		<tr>
			<td>{{ $mhs->NIM }}</td>
			<td>{{ $mhs->Nama }}</td>
			<td>{{ $mhs->Tahun_Angkatan }}</td>
			<td>{{ $mhs->Alamat }}</td>
		</tr>
		@endforeach
	</table>
 
</body>
</html>