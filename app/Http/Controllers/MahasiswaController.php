<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $mahasiswa = Mahasiswa::when($request->search, function ($query) use ($request) {
                $query->where('NIM', 'LIKE', "%{$request->search}%")
                      ->orWhere('Nama', 'LIKE', "%{$request->search}%");
                })->paginate(5);
        return view('index',['mahasiswa' => $mahasiswa]);

    }

}
