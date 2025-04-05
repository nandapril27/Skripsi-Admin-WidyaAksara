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
        Schema::create('menulis_aksara_ngalagenas', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama aksara
            $table->string('gambar_aksara'); // Path gambar aksara
            $table->string('gambar_pola'); // Path gambar pola
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menulis_aksara_ngalagenas');
    }
};
