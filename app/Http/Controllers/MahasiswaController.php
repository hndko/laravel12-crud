<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        $data = [
            'title' => 'Mahasiswa',
            'pages' => 'Daftar Mahasiswa',
            'mahasiswa' => $mahasiswa,
        ];

        return view('mahasiswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Mahasiswa',
            'pages' => 'Tambah Mahasiswa',
        ];

        return view('mahasiswa.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:155',
            'nim' => 'required|unique:mahasiswa,nim|max:155',
            'email' => 'required|unique:mahasiswa,email|max:155',
            'no_telpon' => 'required',
            'alamat' => 'nullable',
        ]);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->name = $request->name;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->email = $request->email;
        $mahasiswa->no_telpon = $request->no_telpon;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $data = [
            'title' => 'Mahasiswa',
            'pages' => 'Edit Mahasiswa',
            'mahasiswa' => $mahasiswa,
        ];

        return view('mahasiswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:155',
            'nim' => 'required|unique:mahasiswa,nim,' . $id . '|max:155',
            'email' => 'required|unique:mahasiswa,email,' . $id . '|max:155',
            'no_telpon' => 'required',
            'alamat' => 'nullable',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->name = $request->name;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->email = $request->email;
        $mahasiswa->no_telpon = $request->no_telpon;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
