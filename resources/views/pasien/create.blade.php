@extends('layouts.main')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-success text-white">
        <h4 class="mb-0">Tambah Pasien</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('pasien.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="no_hp" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection