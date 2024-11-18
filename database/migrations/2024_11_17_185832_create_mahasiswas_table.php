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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('npm')->unique();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->date('thn_mulai');
            $table->string('jenjang_pendidikan');
            $table->string('universitas');
            $table->foreignId('prodi_id')->constrained()->onDelete('cascade');
            $table->date('thn_lulus');
            $table->string('kelas_reg_rk');
            $table->string('status_mhs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
