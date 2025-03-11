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
        Schema::create('nilai_kuis_menulis_aksara_ngalagena_2', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('siswa_id') // Relasi ke tabel siswas
                  ->constrained('siswas') // Mereferensikan tabel siswas
                  ->onDelete('cascade'); // Hapus nilai jika siswa dihapus
            $table->date('tanggal'); // Tanggal kuis
            $table->string('aksara_da')->nullable(); // Nilai untuk ka
            $table->string('aksara_na')->nullable(); // Nilai untuk ga
            $table->string('aksara_pa')->nullable(); // Nilai untuk nga
            $table->string('aksara_ba')->nullable(); // Nilai untuk ja
            $table->string('aksara_ma')->nullable(); // Nilai untuk nya
            $table->string('aksara_ya')->nullable(); // Nilai untuk ta
            $table->string('aksara_ra')->nullable(); // Nilai untuk ta
            $table->string('aksara_la')->nullable(); // Nilai untuk ta
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_kuis_menulis_aksara_ngalagena_2');
    }
};
