@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Tambah Dokter</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('dokter.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Dokter</label>
                <input type="text" name="nama_dokter" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Poliklinik</label>
                <input type="text" name="poliklinik" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
