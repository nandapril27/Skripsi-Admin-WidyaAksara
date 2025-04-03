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
        Schema::create('nilai_kuis_menulis_aksara_swara', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('siswa_id') // Relasi ke tabel siswas
                  ->constrained('siswas') // Mereferensikan tabel siswas
                  ->onDelete('cascade'); // Hapus nilai jika siswa dihapus
            $table->date('tanggal'); // Tanggal kuis
            $table->string('aksara_a')->nullable(); // Nilai untuk A
            $table->string('aksara_é')->nullable(); // Nilai untuk Ba
            $table->string('aksara_i')->nullable(); // Nilai untuk Ta
            $table->string('aksara_o')->nullable(); // Nilai untuk To
            $table->string('aksara_u')->nullable(); // Nilai untuk Ja
            $table->string('aksara_e')->nullable(); // Nilai untuk Ha
            $table->string('aksara_eu')->nullable(); // Nilai untuk Kho
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_kuis_menulis_aksara_swara');
    }
};

