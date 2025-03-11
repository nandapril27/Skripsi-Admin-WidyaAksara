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
        Schema::create('nilai_kuis_terjemahan_aksara_ke_latins', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('siswa_id') // Foreign key ke tabel siswa
                ->constrained('siswas') // Mereferensikan tabel siswas
                ->onDelete('cascade'); // Hapus nilai jika siswa dihapus
            $table->integer('nilai'); // Nilai siswa
            $table->timestamps(); // Untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nilai_kuis_terjemahan_aksara_ke_latins', function (Blueprint $table) {
            $table->dropForeign(['siswa_id']); // Hapus foreign key sebelum drop tabel
        });

        Schema::dropIfExists('nilai_kuis_terjemahan_aksara_ke_latins');
    }
};
