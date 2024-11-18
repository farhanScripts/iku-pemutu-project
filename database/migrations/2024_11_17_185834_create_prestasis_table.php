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
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('prestasi');
            $table->foreignId('tingkat_prestasi_id')->constrained()->onDelete('cascade');
            $table->foreignId('kategori_prestasi_id')->constrained()->onDelete('cascade');
            $table->integer('peringkat');
            $table->foreignId('mahasiswa_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestasis');
    }
};
