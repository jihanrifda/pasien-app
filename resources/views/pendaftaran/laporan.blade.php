@extends('layouts.main')

@section('content')
<div class="card mt-4">
    <div class="card-header bg-info text-white">
        <h4 class="mb-0">Laporan Pendaftaran Pasien</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Dokter</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Keluhan</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pendaftarans as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->pasien->nama }}</td>
                    <td>{{ $p->dokter->nama_dokter }}</td>
                    <td>{{ $p->tanggal }}</td>
                    <td>{{ $p->waktu }}</td>
                    <td>{{ $p->keluhan }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
