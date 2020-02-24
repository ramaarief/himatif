@extends('admin/main')
@section('container')
	<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Program Kerja Himatif</h4>Tahun periode 2019/2020 
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Proker</th>
                                            <th>Tanggal Pelaksanaan</th>
                                            <th>Tempat</th>
                                            <th>Ketua Pelaksana</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach($proker as $p)
									<tr>
										<td>{{ $p->id }}</td>
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
										<td>
											<form action="/proker/{{ $p->id }}" method="post" class="d-inline">
												@method('delete')
												@csrf
											<button type="submit" class="btn btn-danger">Delete</button>
											</form>
										</td>
									</tr>
									@endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
@endsection
