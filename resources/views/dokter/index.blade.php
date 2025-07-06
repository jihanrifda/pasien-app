@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Data Dokter</h5>
        <a href="{{ route('dokter.create') }}" class="btn btn-light btn-sm">+ Tambah Dokter</a>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($dokter as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nama_dokter }}</td>
                    <td>{{ $d->spesialis }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>
                        <a href="{{ route('dokter.edit', $d->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('dokter.destroy', $d->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus dokter ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
