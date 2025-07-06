<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokters';

    protected $fillable = [
        'nama_dokter',
        'spesialis',
        'no_hp',
        'alamat',
    ];

    // Relasi: 1 Dokter punya banyak Pendaftaran
    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
