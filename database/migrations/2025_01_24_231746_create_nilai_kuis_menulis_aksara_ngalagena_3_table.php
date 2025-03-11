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
        Schema::create('nilai_kuis_menulis_aksara_ngalagena_3', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('siswa_id') // Relasi ke tabel siswas
                  ->constrained('siswas') // Mereferensikan tabel siswas
                  ->onDelete('cascade'); // Hapus nilai jika siswa dihapus
            $table->date('tanggal'); // Tanggal kuis
            $table->string('aksara_wa')->nullable(); // Nilai untuk ka
            $table->string('aksara_sa')->nullable(); // Nilai untuk ga
            $table->string('aksara_ha')->nullable(); // Nilai untuk nga
            $table->string('aksara_fa')->nullable(); // Nilai untuk ja
            $table->string('aksara_va')->nullable(); // Nilai untuk nya
            $table->string('aksara_qa')->nullable(); // Nilai untuk ta
            $table->string('aksara_xa')->nullable(); // Nilai untuk ta
            $table->string('aksara_za')->nullable(); // Nilai untuk ta
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_kuis_menulis_aksara_ngalagena_3');
    }
};
