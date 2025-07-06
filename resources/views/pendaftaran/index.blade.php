@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white d-flex justify-content-between">
        <h5 class="mb-0">Data Pendaftaran Berobat</h5>
        <a href="{{ route('pendaftaran.create') }}" class="btn btn-light btn-sm">+ Daftar Baru</a>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Pasien</th>
                    <th>Dokter</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Keluhan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($pendaftarans as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->pasien->nama }}</td>
                    <td>{{ $p->dokter->nama_dokter }}</td>
                    <td>{{ $p->tanggal }}</td>
                    <td>{{ $p->waktu }}</td>
                    <td>{{ $p->keluhan }}</td>
                    <td>
                        <a href="{{ route('pendaftaran.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pendaftaran.destroy', $p->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
