<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Proker;
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
        $kahim = Mahasiswa::where('id', '1')->get();
        $wakahim = Mahasiswa::where('id', '2')->get();
        $sekretaris1 = Mahasiswa::where('id', '3')->get();
        $sekretaris2 = Mahasiswa::where('id', '4')->get();
        $bendahara1 = Mahasiswa::where('id', '6')->get();
        $bendahara2 = Mahasiswa::where('id', '8')->get();

        $proker1 = Proker::where('id', '1')->get();
        $proker2 = Proker::where('id', '2')->get();
        $proker3 = Proker::where('id', '3')->get();
        $proker4 = Proker::where('id', '4')->get();
        $proker5 = Proker::where('id', '5')->get();

        $proker = Proker::all();
        $mahasiswa = Mahasiswa::when($request->search, function ($query) use ($request) {
                $query->where('NIM', 'LIKE', "%{$request->search}%")
                      ->orWhere('Nama', 'LIKE', "%{$request->search}%");
                })->paginate(5);

        return view('index',['mahasiswa' => $mahasiswa], compact('mahasiswa', 'proker', 'kahim', 'wakahim', 'sekretaris1', 'sekretaris2', 'bendahara1', 'bendahara2', 'proker1', 'proker2', 'proker3', 'proker4', 'proker5'));

    }

}
