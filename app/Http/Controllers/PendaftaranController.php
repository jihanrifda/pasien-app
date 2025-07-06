<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    // ✅ Tampilkan semua data pendaftaran
    public function index()
    {
        $pendaftarans = Pendaftaran::with('pasien', 'dokter')->get();
        return view('pendaftaran.index', compact('pendaftarans'));
    }

    // ✅ Tampilkan form tambah
    public function create()
    {
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        return view('pendaftaran.create', compact('pasiens', 'dokters'));
    }

    // ✅ Simpan data baru (SUDAH PAKAI VALIDASI)
    public function store(Request $request)
    {
        $request->validate([
            'pasien_id'     => 'required|exists:pasiens,id',
            'dokter_id'     => 'required|exists:dokters,id',
            'tanggal'       => 'required|date',
            'waktu'         => 'required',
            'keluhan'       => 'nullable|string',
        ]);

        Pendaftaran::create([
            'pasien_id' => $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'tanggal'   => $request->tanggal,
            'waktu'     => $request->waktu,
            'keluhan'   => $request->keluhan,
        ]);

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil ditambahkan');
    }

    // ✅ Tampilkan form edit
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        return view('pendaftaran.edit', compact('pendaftaran', 'pasiens', 'dokters'));
    }

    // ✅ Simpan perubahan
    public function update(Request $request, $id)
    {
        $request->validate([
            'pasien_id'     => 'required|exists:pasiens,id',
            'dokter_id'     => 'required|exists:dokters,id',
            'tanggal'       => 'required|date',
            'waktu'         => 'required',
            'keluhan'       => 'nullable|string',
        ]);

        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->update([
            'pasien_id' => $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'tanggal'   => $request->tanggal,
            'waktu'     => $request->waktu,
            'keluhan'   => $request->keluhan,
        ]);

        return redirect()->route('pendaftaran.index')->with('success', 'Data pendaftaran berhasil diperbarui');
    }

    // ✅ Hapus data
    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();
        return redirect()->route('pendaftaran.index')->with('success', 'Data pendaftaran berhasil dihapus');
    }

    // ✅ LAPORAN PENDAFTARAN
    public function laporan()
    {
        $pendaftarans = Pendaftaran::with(['pasien', 'dokter'])->get();
        return view('pendaftaran.laporan', compact('pendaftarans'));
    }
}
