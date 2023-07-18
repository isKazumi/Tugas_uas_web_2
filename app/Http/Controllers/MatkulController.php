<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matkul = Matkul::all();
        return view('modules.matkul.index', compact('matkul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules.matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Matkul::create($request->all());
        Alert::success('Success', 'Penginputan Matkul Berhasil!!!');
        return redirect()->route('matkul.index');
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
    public function edit(Matkul $matkul)
    {
        return view('modules.matkul.edit', compact('matkul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matkul $matkul)
    {
        $matkul->update($request->all());

        Alert::success('Success', 'Pengeditan Matakuliah Berhasil!!!');
        return redirect()->route('matkul.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matkul $matkul)
    {
        $matkul->delete();
        Alert::success('Success', 'Berhasil Menghapus Matakuliah!!!');
        return redirect()->route('matkul.index');
    }
}
