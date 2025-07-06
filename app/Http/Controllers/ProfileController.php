<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Tampilkan halaman profil rumah sakit.
     */
    public function index()
    {
        return view('profil'); // Akan menampilkan resources/views/profil.blade.php
    }
}
