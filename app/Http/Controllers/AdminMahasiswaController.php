<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $mahasiswa = Mahasiswa::all()->paginate(5);

         $mahasiswa = Mahasiswa::when($request->search, function ($query) use ($request) {
                $query->where('NIM', 'LIKE', "%{$request->search}%")
                      ->orWhere('Nama', 'LIKE', "%{$request->search}%");
                })->paginate(5);

        // $mahasiswa = DB::table('member')->paginate(5);
        
        // $mahasiswa = Mahasiswa::when($request->search, function($query) use($request){
        //     $query->where('Nama', 'LIKE', '%'.$request->search.'%');
        // });
        // $mahasiswa = Mahasiswa::select('NIM', 'Nama', 'Tahun_Angkatan', 'Alamat', 'Photo')->paginate(10);
        return view('admin',['mahasiswa' => $mahasiswa]);

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

        $photoName = 'products-'.date('Ymdhis').'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move('images', $photoName);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->NIM = $request->nim;
        $mahasiswa->Nama = $request->nama;
        $mahasiswa->Tahun_Angkatan = $request->tahun;
        $mahasiswa->Alamat = $request->alamat;

        // $file       = $request->file('photo');
        // $fileName   = $file->getClientOriginalName();
        // $request->file('photo')->move("images/", $fileName);

        $mahasiswa->Photo = $photoName;


        $mahasiswa->save();

        // DB::table('anggota')->insert([
        //     'NIM' => $request->nim,
        //     'Nama' => $request->nama,
        //     'Tahun_Angkatan' => $request->tahun,
        //     'Alamat' => $request->alamat
        // ]);

        // $request->validate([
        //     'NIM' => 'required',
        //     'Nama' => 'required',
        //     'Tahun_Angkatan' => 'required',
        //     'Alamat' => 'required',
        // ]);

        // Mahasiswa::create($request->all());

        return redirect('admin');
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

        // if($request->file('photo') == "")
        // {
        //     $mahasiswa->Photo = $mahasiswa->Photo;
        // } 
        // else
        // {
        //     $file       = $request->file('photo');
        //     $fileName   = $file->getClientOriginalName();
        //     $request->file('photo')->move("images/", $fileName);
        //     $mahasiswa->Photo = $fileName;
        // }
        
        $mahasiswa->update();

        // if($request->file('photo') == "")
        //         {
        //             $mahasiswa->photo = $mahasiswa->photo;
        //         } 
        //         else
        //         {
        //             $file       = $request->file('photo');
        //             $fileName   = $file->getClientOriginalName();
        //             $request->file('photo')->move("images/", $fileName);
        //             $mahasiswa->photo = $fileName;
        //         }

        // Mahasiswa::where('id', $mahasiswa->id)
        //     ->update([
        //         'NIM' => $request->nim,
        //         'Nama' => $request->nama,
        //         'Tahun_Angkatan' => $request->tahun,
        //         'Alamat' => $request->alamat,
        //         'Photo' => $request->photo

        //     ]);

                

        // $mahasiswa = new Mahasiswa;
        // $mahasiswa->NIM = $request->nim;
        // $mahasiswa->Nama = $request->nama;
        // $mahasiswa->Tahun_Angkatan = $request->tahun;
        // $mahasiswa->Alamat = $request->alamat;

        // if($request->file('photo') == "")
        //         {
        //             $mahasiswa->photo = $mahasiswa->photo;
        //         } 
        //         else
        //         {
        //             $file       = $request->file('photo');
        //             $fileName   = $file->getClientOriginalName();
        //             $request->file('photo')->move("images/", $fileName);
        //             $mahasiswa->Photo = $fileName;
        //         }


        // $mahasiswa->update();

        return redirect('admin');
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
        return redirect('admin');
    }
}
