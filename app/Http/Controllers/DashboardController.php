<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;

class DashboardController extends Controller
{
    
    public function index () {

    	// $mahasiswa = DB::table('anggota')->get();
    	$mahasiswa = Mahasiswa::all();
     	return view('index',['anggota' => $mahasiswa]);
		
    }

}
