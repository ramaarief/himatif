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
    public function index()
    {
        $mahasiswa = DB::table('anggota')->get();
        // $mahasiswa = Mahasiswa::all();
        return view('index',['anggota' => $mahasiswa]);

        // return Mahasiswa::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $mahasiswa = new Mahasiswa;
        // $mahasiswa->NIM = $request->NIM;
        // $mahasiswa->Nama = $request->Nama;
        // $mahasiswa->Tahun_Angkatan = $request->Tahun_Angkatan;
        // $mahasiswa->Alamat = $request->Alamat;

        // $mahasiswa->save();

        DB::table('anggota')->insert([
            'NIM' => $request->nim,
            'Nama' => $request->nama,
            'Tahun_Angkatan' => $request->tahun,
            'Alamat' => $request->alamat
        ]);

        // $request->validate([
        //     'NIM' => 'required',
        //     'Nama' => 'required',
        //     'Tahun_Angkatan' => 'required',
        //     'Alamat' => 'required',
        // ]);

        // Mahasiswa::create($request->all());

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {

        return view('edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        Mahasiswa::where('id', $mahasiswa->id)
            ->update([
                'NIM' => $request->nim,
                'Nama' => $request->nama,
                'Tahun_Angkatan' => $request->tahun,
                'Alamat' => $request->alamat
            ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/');
    }
}
