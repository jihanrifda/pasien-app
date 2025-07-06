@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Form Pendaftaran Berobat</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('pendaftaran.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Pasien</label>
                <select name="pasien_id" class="form-select" required>
                    <option disabled selected>Pilih pasien</option>
                    @foreach ($pasiens as $p)
                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Dokter</label>
                <select name="dokter_id" class="form-select" required>
                    <option disabled selected>Pilih dokter</option>
                    @foreach ($dokters as $d)
                        <option value="{{ $d->id }}">{{ $d->nama_dokter }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Berobat</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Waktu Berobat</label>
                <input type="time" name="waktu" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Keluhan</label>
                <input type="text" name="keluhan" class="form-control" required>
            </div>

            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('pendaftaran.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
