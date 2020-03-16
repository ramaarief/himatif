<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use PDF;

class AdminMahasiswaController extends Controller
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
                      ->orWhere('Nama', 'LIKE', "%{$request->search}%")
                      ->orWhere('Tahun_Angkatan', 'LIKE', "%{$request->search}%")
                      ->orWhere('Alamat', 'LIKE', "%{$request->search}%");;
                })->paginate(5);

        return view('admin',['mahasiswa' => $mahasiswa]);

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

        $photoName = 'products-'.date('Ymdhis').'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move('images', $photoName);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->NIM = $request->nim;
        $mahasiswa->Nama = $request->nama;
        $mahasiswa->Tahun_Angkatan = $request->tahun;
        $mahasiswa->Alamat = $request->alamat;

        $mahasiswa->Photo = $photoName;

        $mahasiswa->save();

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
        return view('admin');
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
        $mahasiswa = Mahasiswa::where('id', $mahasiswa->id)->first();
        $mahasiswa->NIM = $request['nim'];
        $mahasiswa->Nama = $request['nama'];
        $mahasiswa->Tahun_Angkatan = $request['tahun'];
        $mahasiswa->Alamat = $request['alamat'];

        if( $request->photo){
            $photoName = 'products-'.date('Ymdhis').'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move('images', $photoName);
            $mahasiswa->Photo = $photoName;
        }
        
        $mahasiswa->update();

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

    public function export_excel()
    {
        return Excel::download(new MahasiswaExport, 'mahasiswa.xlsx');
    }

    public function cetak_pdf()
    {
        $mahasiswa = Mahasiswa::all();
 
        $pdf = PDF::loadview('exportPDF',['mahasiswa'=>$mahasiswa]);
        return $pdf->download('laporan-mahasiswa-pdf');
    }
}
