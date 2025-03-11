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
        Schema::create('kuis_terjemahan_aksara_ke_latins', function (Blueprint $table) {
            $table->id();
            $table->string('soal'); // Input image (string path)
            $table->string('A');    // Pilihan A
            $table->string('B');    // Pilihan B
            $table->string('C');    // Pilihan C
            $table->string('D');    // Pilihan D
            $table->string('jawaban'); // Jawaban yang benar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuis_terjemahan_aksara_ke_latins');
    }
};
