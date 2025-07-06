<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tambahkan kolom spesialis ke tabel dokters
     */
    public function up(): void
    {
        Schema::table('dokters', function (Blueprint $table) {
            if (!Schema::hasColumn('dokters', 'spesialis')) {
                $table->string('spesialis')->nullable();
            }
        });
    }

    /**
     * Hapus kolom spesialis saat rollback
     */
    public function down(): void
    {
        Schema::table('dokters', function (Blueprint $table) {
            if (Schema::hasColumn('dokters', 'spesialis')) {
                $table->dropColumn('spesialis');
            }
        });
    }
};
