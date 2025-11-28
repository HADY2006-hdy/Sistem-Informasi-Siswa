<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // ========================
    // TAMPILKAN SEMUA DATA + SEARCH
    // ========================
    public function index(Request $request)
    {
        // Ambil keyword pencarian
        $keyword = $request->search;

        // Query pencarian berdasarkan nama
        $siswas = Siswa::when($keyword, function ($query) use ($keyword) {
                $query->where('nama', 'like', "%$keyword%");
            })
            ->orderBy('id', 'DESC')
            ->get();

        return view('siswa.index', compact('siswas', 'keyword'));
    }

    // ========================
    // FORM TAMBAH DATA
    // ========================
    public function create()
    {
        return view('siswa.create');
    }

    // ========================
    // SIMPAN DATA BARU
    // ========================
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:siswas',
            'kelas' => 'required',
            'alamat' => 'required',
            'gender' => 'required'
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan');
    }

    // ========================
    // FORM EDIT
    // ========================
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    // ========================
    // UPDATE DATA
    // ========================
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:siswas,nis,' . $siswa->id,
            'kelas' => 'required',
            'alamat' => 'required',
            'gender' => 'required'
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui');
    }

    // ========================
    // HAPUS DATA
    // ========================
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus');
    }
}
