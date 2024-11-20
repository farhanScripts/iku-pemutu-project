<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dsn_penelitian_luar_pt', function (Blueprint $table) {
            $table->integer('id_dsn_penelitian')->primary();
            $table->string('thn_ajar');
            $table->foreignId('dosen_id')->constrained('dosens')->onDelete('cascade')->onUpdate('cascade');
            $table->year('tahun_kegiatan');
            $table->string('lembaga_iptek');
            $table->string('jenis');
            $table->string('judul');
            $table->integer('bobot')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dsn_penelitian_luar_pts');
    }
};
