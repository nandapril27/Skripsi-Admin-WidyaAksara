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
        Schema::create('kuis_terjemahan_latin_ke_aksaras', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('soal'); // Kolom soal
            $table->string('A'); // Kolom untuk input image A
            $table->string('B'); // Kolom untuk input image B
            $table->string('C'); // Kolom untuk input image C
            $table->string('D'); // Kolom untuk input image D
            $table->string('jawaban'); // Kolom untuk jawaban
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuis_terjemahan_latin_ke_aksaras');
    }
};
