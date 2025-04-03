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
        Schema::create('nilai_kuis_menulis_aksara_ngalagenas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswas')->onDelete('cascade'); // Relasi ke tabel siswa
            $table->integer('nilai');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nilai_kuis_menulis_aksara_ngalagenas', function (Blueprint $table) {
            $table->dropForeign(['siswa_id']); // Hapus foreign key sebelum drop tabel
        });

        Schema::dropIfExists('nilai_kuis_menulis_aksara_ngalagenas');
    }
};
