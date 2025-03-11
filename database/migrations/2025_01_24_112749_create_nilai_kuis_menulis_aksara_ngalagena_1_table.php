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
        Schema::create('nilai_kuis_menulis_aksara_ngalagena_1', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('siswa_id') // Relasi ke tabel siswas
                  ->constrained('siswas') // Mereferensikan tabel siswas
                  ->onDelete('cascade'); // Hapus nilai jika siswa dihapus
            $table->date('tanggal'); // Tanggal kuis
            $table->string('aksara_ka')->nullable(); // Nilai untuk ka
            $table->string('aksara_ga')->nullable(); // Nilai untuk ga
            $table->string('aksara_nga')->nullable(); // Nilai untuk nga
            $table->string('aksara_ca')->nullable(); // Nilai untuk ca
            $table->string('aksara_ja')->nullable(); // Nilai untuk ja
            $table->string('aksara_nya')->nullable(); // Nilai untuk nya
            $table->string('aksara_ta')->nullable(); // Nilai untuk ta
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_kuis_menulis_aksara_ngalagena_1');
    }
};
