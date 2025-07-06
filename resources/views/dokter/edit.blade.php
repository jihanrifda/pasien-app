@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-header bg-warning">
        <h5 class="mb-0">Edit Dokter</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Dokter</label>
                <input type="text" name="nama_dokter" class="form-control" value="{{ $dokter->nama_dokter }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Poliklinik</label>
                <input type="text" name="poliklinik" class="form-control" value="{{ $dokter->poliklinik }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ $dokter->alamat }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
