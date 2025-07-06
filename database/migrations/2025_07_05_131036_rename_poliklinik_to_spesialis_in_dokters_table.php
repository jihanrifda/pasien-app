<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Rename kolom 'poliklinik' menjadi 'spesialis'
     */
    public function up(): void
    {
        Schema::table('dokters', function (Blueprint $table) {
            if (Schema::hasColumn('dokters', 'poliklinik')) {
                $table->renameColumn('poliklinik', 'spesialis');
            }
        });
    }

    /**
     * Balik lagi: 'spesialis' jadi 'poliklinik' kalau rollback
     */
    public function down(): void
    {
        Schema::table('dokters', function (Blueprint $table) {
            if (Schema::hasColumn('dokters', 'spesialis')) {
                $table->renameColumn('spesialis', 'poliklinik');
            }
        });
    }
};
