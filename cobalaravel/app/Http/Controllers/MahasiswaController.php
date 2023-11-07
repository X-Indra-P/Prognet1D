<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
        $datas = Mahasiswa::all();
        return view('mahasiswa.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new Mahasiswa; 
        return view('mahasiswa.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Mahasiswa;
        $model->nama = $request->nama;
        $model->NIM = $request->NIM;
        $model->Jurusan = $request->Jurusan;
        $model->Alamat = $request->Alamat;
        $model->Gender = $request->Gender;
        $model->Agama = $request->Agama;
        
        $model->timestamps = false;
        $model->save();
        $model->timestamps = true;



        return redirect ('mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Mahasiswa::find($id); 
        return view('mahasiswa.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Mahasiswa::find($id);
        $model->Nama = $request->Nama;
        $model->NIM = $request->NIM;
        $model->Jurusan = $request->Jurusan;
        $model->Alamat = $request->Alamat;
        $model->Gender = $request->Gender;
        $model->Agama = $request->Agama;

        $model->timestamps = false;
        $model->save();
        $model->timestamps = true;


        return redirect ('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Mahasiswa::find($id);
        $model->delete();

        return redirect ('mahasiswa');
    }
}
