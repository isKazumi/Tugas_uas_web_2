<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilai = Nilai::with('dosen', 'mahasiswa', 'matkul')->get();
        return view('modules.nilai.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::select('id', 'nama')->get();
        $matkul = Matkul::select('kd_matkul', 'nama_matkul', 'id')->get();
        $dosen = Dosen::select('nama_dosen', 'id')->get();

        return view('modules.nilai.create', compact('mahasiswa', 'matkul', 'dosen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nilai = Nilai::create([
            'dosen_id' => $request->matkul_id,
            'mahasiswa_id' => $request->mahasiswa_id,
            'nilai' => $request->nilai,
        ]);

        Alert::success('Success', 'Berhasil Menambah Nilai!!!');

        return redirect()->route('nilai.index');
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
    public function edit(Nilai $nilai)
    {
        $mahasiswa = Mahasiswa::select('id', 'nama')->get();
        $matkul = Matkul::select('kd_matkul', 'nama_matkul', 'id')->get();
        $dosen = Dosen::select('nama_dosen', 'matkul_id', 'id')->get();

        return view('modules.nilai.edit', compact('mahasiswa', 'matkul', 'dosen', 'nilai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {

        $nilai->update($request->all());
        Alert::success('Success', 'Berhasil Edit Nilai!!!');

        return redirect()->route('nilai.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        $nilai->destroy($nilai->id);

        Alert::success('Success', 'Berhasil Menghapus Nilai!!!');

        return redirect()->route('nilai.index');
    }
}
