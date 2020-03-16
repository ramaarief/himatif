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
                    <form method="get" action="/" role="search" class="app-search hidden-xs" >
                        <input type="text" name="search" placeholder="Search..." style="border-color: #99c1ff; padding: 8px; padding-left: 20px; border-radius: 20px;" title="Tekan Enter untuk mencari"> 
                    </form>
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
                <hr>
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        Jumlah Data Mahasiswa =
                        {{ $mahasiswa->total() }} 
                        <br>
                        <h4 class="page-title">Page Number</h4>
                        {{ $mahasiswa->links() }}
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12" style="padding-right: 80px;"> 
                        <h4 class="page-title pull-right">Export Data</h4><br><br>
                        <a href="/cetak_pdf" class="btn btn-danger pull-right" style="background-color: #ff0000;" target="_blank">CETAK PDF</a>
                        <a href="/export_excel" class="btn btn-success my-3 pull-right" style="background-color: #6c9626;" target="_blank">EXPORT EXCEL</a>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection