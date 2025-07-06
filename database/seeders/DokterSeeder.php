<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DokterSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('dokters')->insert([
            [
                'nama_dokter' => 'dr. Andi Saputra',
                'spesialis' => 'Umum',
                'no_hp' => '081234567001',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Budi Santoso',
                'spesialis' => 'Jantung',
                'no_hp' => '081234567002',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Clara Wulandari',
                'spesialis' => 'Gigi',
                'no_hp' => '081234567003',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Dimas Prakoso',
                'spesialis' => 'Anak',
                'no_hp' => '081234567004',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Erlina Putri',
                'spesialis' => 'Kulit & Kelamin',
                'no_hp' => '081234567005',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Faisal Hakim',
                'spesialis' => 'Bedah Umum',
                'no_hp' => '081234567006',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Grace Melani',
                'spesialis' => 'Mata',
                'no_hp' => '081234567007',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Hendra Gunawan',
                'spesialis' => 'Saraf',
                'no_hp' => '081234567008',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Intan Kusuma',
                'spesialis' => 'Kandungan',
                'no_hp' => '081234567009',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Johan Suwandi',
                'spesialis' => 'Paru-paru',
                'no_hp' => '081234567010',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Kartika Ayu',
                'spesialis' => 'THT',
                'no_hp' => '081234567011',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Luthfi Ramadhan',
                'spesialis' => 'Gizi Klinik',
                'no_hp' => '081234567012',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Mega Pratama',
                'spesialis' => 'Rehabilitasi Medik',
                'no_hp' => '081234567013',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Nia Oktaviani',
                'spesialis' => 'Psikiater',
                'no_hp' => '081234567014',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_dokter' => 'dr. Oskar Tanjung',
                'spesialis' => 'Poli Umum',
                'no_hp' => '081234567015',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
