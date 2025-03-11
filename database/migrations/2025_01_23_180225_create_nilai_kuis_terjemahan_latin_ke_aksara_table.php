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
        Schema::create('nilai_kuis_terjemahan_latin_ke_aksara', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('siswa_id') // Foreign key ke tabel siswa
                  ->constrained('siswas')
                  ->onDelete('cascade'); // Jika siswa dihapus, nilai ikut terhapus
            $table->integer('nilai'); // Kolom nilai
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nilai_kuis_terjemahan_latin_ke_aksara', function (Blueprint $table) {
            $table->dropForeign(['siswa_id']); // Hapus foreign key sebelum drop tabel
        });
    
        Schema::dropIfExists('nilai_kuis_terjemahan_latin_ke_aksara');
    }

};
