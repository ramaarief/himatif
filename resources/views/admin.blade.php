@extends('admin/main')
@section('container')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Data Anggota Himatif</h4>Tahun periode 2019/2020 </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="/create" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">(+) Tambah Data Anggota</a>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!--row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>NAMA</th>
                                <th>TAHUN ANGKATAN</th>
                                <th>ALAMAT</th>
                                <th>PHOTO</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $mhs->NIM }}</td>
                                <td>{{ $mhs->Nama }}</td>
                                <td>{{ $mhs->Tahun_Angkatan }}</td>
                                <td>{{ $mhs->Alamat }}</td>
                                <td>
                                    <img src="{{ asset('images/'.$mhs->Photo) }}" id="showgambar" style="max-width:200px;max-height:200px;" />
                                </td>
                                <td>
                                    <a href="/edit/{{ $mhs->id }}" class="btn btn-primary" style="color: #fff; width: 67px;">Edit</a>
                                    <form action="/admin/{{ $mhs->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
                Page Number<br>
                {{ $mahasiswa->links() }}
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection