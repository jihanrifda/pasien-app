<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Pendaftaran;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'jumlahPasien' => Pasien::count(),
            'jumlahDokter' => Dokter::count(),
            'jumlahPendaftaran' => Pendaftaran::count(),
        ]);
    }
}
