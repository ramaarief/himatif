<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function view () {
		// return view('dashboard');//mengembalikan view
		// $user = User ::where("email", "foorbal2gmai.com")->first(); menampilkan data /mencari
		// $user = User ::findorfail(2); menampilkan data /mencari jika tidak ada eror
		// $user = User ::find(2); //menampilkan data /mencari
		// $user = User ::select("nama"); //  nama dan email aja
		 // $user = User ::all(); untuk semua data

// mengambil data dari table pegawai
    	$users = DB::table('anggota')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['anggota' => $users]);
		// return response()->json($user);
    }
 //    // method untuk menampilkan view form tambah pegawai
	// public function tambah()
	// {
 
	// 	// memanggil view tambah
	// 	return view('tambah');
 
	// }
 
	// // method untuk insert data ke table pegawai
	// public function store(Request $request)
	// {
	// 	// insert data ke table pegawai
	// 	DB::table('anggota')->insert([
	// 		'Nim' => $request->NIM,
	// 		'Nama' => $request->Nama,
	// 		'Tahun_Angkatan' => $request->Tahun_Angkatan,
	// 		'Alamat' => $request->Alamat
	// 	]);
	// 	// alihkan halaman ke halaman pegawai
	// 	return redirect('/');
 
	// }
 
	// // method untuk edit data pegawai
	// public function edit($id)
	// {
	// 	// mengambil data pegawai berdasarkan id yang dipilih
	// 	$user = DB::table('anggota')->where('id',$id)->get();
	// 	// passing data pegawai yang didapat ke view edit.blade.php
	// 	return view('edit',['anggota' => $user]);
 
	// }
 
	// // update data pegawai
	// public function update(Request $request)
	// {
	// 	// update data pegawai
	// 	DB::table('anggota')->where('id',$request->id)->update([
	// 		'nim' => $request->NIM,
	// 		'nama' => $request->Nama,
	// 		'tahun_angkatan' => $request->Tahun_Angkatan,
	// 		'alamat' => $request->Alamat
	// 	]);
	// 	// alihkan halaman ke halaman pegawai
	// 	return redirect('/index');
	// }
 
	// // method untuk hapus data pegawai
	// public function hapus($id)
	// {
	// 	// menghapus data pegawai berdasarkan id yang dipilih
	// 	DB::table('anggota')->where('id',$id)->delete();
		
	// 	// alihkan halaman ke halaman pegawai
	// 	return redirect('/index');
	// }

	// // public function detail($id)
	// // {
	// // 	$user = DB::table('anggota')->where('id',$id)->get();
	// // 	// passing data pegawai yang didapat ke view edit.blade.php
	// // 	return view('detail',['anggota' => $user]);
	// // }
}
