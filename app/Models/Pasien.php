<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasiens';

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'jenis_kelamin',
    ];

    // Relasi: 1 Pasien punya banyak Pendaftaran
    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
