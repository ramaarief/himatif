<?php

namespace App\Http\Controllers;

use App\Proker;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProkerController extends Controller
{

    public function index()
    {
        $proker = Proker::all();
        $mahasiswa = Mahasiswa::all();
        return view('proker',['proker' => $proker], compact('mahasiswa', 'proker'));
    }

}
