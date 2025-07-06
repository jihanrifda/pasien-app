<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    // Tampilkan semua data dokter
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter.index', compact('dokter'));
    }

    // Tampilkan form tambah dokter
    public function create()
    {
        return view('dokter.create');
    }

    // Simpan data dokter baru
    public function store(Request $request)
    {
        Dokter::create($request->all());
        return redirect()->route('dokter.index')->with('success', 'Dokter berhasil ditambahkan');
    }

    // Tampilkan form edit dokter
    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('dokter.edit', compact('dokter'));
    }

    // Simpan perubahan data dokter
    public function update(Request $request, $id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->update($request->all());
        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil diperbarui');
    }

    // Hapus data dokter
    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();
        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil dihapus');
    }
}
