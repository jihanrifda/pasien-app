@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-header bg-warning">
        <h5 class="mb-0">Edit Pendaftaran Berobat</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Pasien</label>
                <select name="pasien_id" class="form-select" required>
                    @foreach ($pasien as $p)
                        <option value="{{ $p->id }}" {{ $pendaftaran->pasien_id == $p->id ? 'selected' : '' }}>
                            {{ $p->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Dokter</label>
                <select name="dokter_id" class="form-select" required>
                    @foreach ($dokter as $d)
                        <option value="{{ $d->id }}" {{ $pendaftaran->dokter_id == $d->id ? 'selected' : '' }}>
                            {{ $d->nama_dokter }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{ $pendaftaran->tanggal }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Waktu</label>
                <input type="time" name="waktu" class="form-control" value="{{ $pendaftaran->waktu }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Keluhan</label>
                <input type="text" name="keluhan" class="form-control" value="{{ $pendaftaran->keluhan }}" required>
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('pendaftaran.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
