<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Matkul;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::with('matkul')->get();
        
        return view('modules.dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matkul = Matkul::select('kd_matkul', 'nama_matkul', 'id')->get();
        return view('modules.dosen.create', compact('matkul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dosen = Dosen::create($request->all());

        Alert::success('Success', 'Berhasil Menambah Dosen!!!');

        return redirect()->route('dosen.index');
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
    public function edit(Dosen $dosen)
    {
        // $matkul = Matkul::select('kd_matkul', 'nama_matkul', 'id')->get();
        $matkul = Matkul::all();

        return view('modules.dosen.edit', compact('dosen', 'matkul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $dosen->update($request->all());

        Alert::success('Success', 'Pengeditan Dosen  Berhasil!!!');

        return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        Alert::success('Success', 'Berhasil Menghapus Dosen!!!');
        return redirect()->route('dosen.index');
    }
}
