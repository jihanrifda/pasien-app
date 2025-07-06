@extends('layouts.main')

@section('content')
<div class="text-center my-5">
    <h2><i class="bi bi-hospital"></i> Dashboard Rumah Sakit</h2>
</div>

<div class="row justify-content-center">
    <div class="col-md-3">
        <div class="card text-center shadow-sm mb-4 hover-card">
            <div class="card-body">
                <h5 class="card-title">Jumlah Pasien</h5>
                <h1>{{ $jumlahPasien }}</h1>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center shadow-sm mb-4 hover-card">
            <div class="card-body">
                <h5 class="card-title">Jumlah Dokter</h5>
                <h1>{{ $jumlahDokter }}</h1>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center shadow-sm mb-4 hover-card">
            <div class="card-body">
                <h5 class="card-title">Jumlah Pendaftaran</h5>
                <h1>{{ $jumlahPendaftaran }}</h1>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-card:hover {
        background-color: #fce4ec;
        transform: scale(1.05);
        transition: all 0.3s ease;
    }
</style>
@endsection
