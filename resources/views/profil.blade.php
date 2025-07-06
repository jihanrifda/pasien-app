@extends('layouts.main')

@section('content')
<div class="text-center my-5">
    <h2><i class="bi bi-heart-pulse-fill text-danger"></i> Profil RS Sehat Selalu</h2>
    <p class="text-muted">Melayani dengan sepenuh hati untuk kesehatan Anda</p>
</div>

<div class="row justify-content-center mb-5">
    <div class="col-md-5 mb-4">
        <div class="card text-center p-4 shadow-sm h-100">
            <img src="{{ asset('images/logo-rs.png') }}" alt="Tentang Kami" width="100" class="mx-auto mb-3">
            <h5 class="fw-bold">Tentang Kami</h5>
            <p>RS Sehat Selalu adalah rumah sakit terpercaya yang menyediakan layanan kesehatan terbaik dengan teknologi modern dan tenaga medis profesional.</p>
        </div>
    </div>
    <div class="col-md-5 mb-4">
        <div class="card text-center p-4 shadow-sm h-100">
            <img src="{{ asset('images/visi misi.png') }}" alt="Visi Misi" width="100" class="mx-auto mb-3">
            <h5 class="fw-bold">Visi & Misi</h5>
            <p>Menjadi rumah sakit pilihan utama dengan pelayanan unggul, profesionalisme tinggi, dan mengutamakan kenyamanan serta keselamatan pasien.</p>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-4 mb-4">
        <div class="card p-3 shadow-sm h-100">
            <h6 class="fw-bold"><i class="bi bi-telephone-fill me-2 text-danger"></i>Nomor Darurat</h6>
            <p class="mb-0">+62 812-3456-7890</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card p-3 shadow-sm h-100">
            <h6 class="fw-bold"><i class="bi bi-envelope-fill me-2 text-danger"></i>Email</h6>
            <p class="mb-0">info@rssehatselalu.com</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card p-3 shadow-sm h-100">
            <h6 class="fw-bold"><i class="bi bi-geo-alt-fill me-2 text-danger"></i>Alamat</h6>
            <p class="mb-0">Jl. Sehat No. 99, Jakarta, Indonesia</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card p-3 shadow-sm h-100">
            <h6 class="fw-bold"><i class="bi bi-clock-fill me-2 text-danger"></i>Jam Operasional</h6>
            <p class="mb-0">Senin - Minggu, 08.00 - 21.00 WIB</p>
        </div>
    </div>
</div>
@endsection
