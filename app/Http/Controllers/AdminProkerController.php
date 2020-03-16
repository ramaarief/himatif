<?php

namespace App\Http\Controllers;

use App\Proker;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proker = Proker::all();
        $mahasiswa = Mahasiswa::all();
        return view('admin_proker',['proker' => $proker], compact('mahasiswa', 'proker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proker = new Proker;
        $proker->Proker = $request->proker;
        $proker->Tanggal_Pelaksanaan = $request->tanggal;
        $proker->Tempat = $request->tempat;

        $proker->save();

        return redirect('/admin_proker');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proker  $proker
     * @return \Illuminate\Http\Response
     */
    public function show(Proker $proker)
    {
        return view('admin_proker');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proker  $proker
     * @return \Illuminate\Http\Response
     */
    public function edit(Proker $proker)
    {
        return view('editproker', compact('proker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proker  $proker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proker $proker)
    {
        $proker = Proker::where('id', $proker->id)->first();
        $proker->Proker = $request['proker'];
        $proker->Tanggal_Pelaksanaan = $request['tanggal'];
        $proker->Tempat = $request['tempat'];
        
        $proker->update();

        return redirect('/admin_proker');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proker  $proker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proker $proker)
    {
        Proker::destroy($proker->id);
        return redirect('admin_proker');
    }
}
