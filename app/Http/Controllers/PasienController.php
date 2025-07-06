<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    // Tampilkan semua data pasien
    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien.index', compact('pasien'));
    }

    // Tampilkan form tambah pasien
    public function create()
    {
        return view('pasien.create');
    }

    // Simpan data pasien baru
    public function store(Request $request)
    {
        Pasien::create($request->all());
        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil ditambahkan');
    }

    // Tampilkan form edit pasien
    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.edit', compact('pasien'));
    }

    // Simpan perubahan data pasien
    public function update(Request $request, $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());
        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diperbarui');
    }

    // Hapus data pasien
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil dihapus');
    }
}
