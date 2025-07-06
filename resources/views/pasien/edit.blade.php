@extends('layouts.main')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-warning">
        <h4 class="mb-0">Edit Pasien</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" value="{{ $pasien->nama }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" value="{{ $pasien->alamat }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="no_hp" value="{{ $pasien->no_hp }}" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select">
                    <option value="L" {{ $pasien->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ $pasien->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection