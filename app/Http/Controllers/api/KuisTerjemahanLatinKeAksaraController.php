<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KuisTerjemahanLatinKeAksara; 

class KuisTerjemahanLatinKeAksaraController extends Controller
{
    /**
     * Mendapatkan semua soal kuis.
     */
    public function getQuestions()
    {
        $questions = KuisTerjemahanLatinKeAksara::all();

        // Ubah opsi A, B, C, D menjadi URL gambar yang bisa diakses
        $questions->transform(function ($question) {
            $question->A = url('storage/' . $question->A);
            $question->B = url('storage/' . $question->B);
            $question->C = url('storage/' . $question->C);
            $question->D = url('storage/' . $question->D);
            return $question;
        });

        return response()->json([
            'success' => true,
            'data' => $questions
        ]);
    }

    /**
     * Menyimpan soal baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'soal' => 'required|string',  // Soal tetap dalam teks
            'A' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'B' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'C' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'D' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'jawaban' => 'required|string',
        ]);

        // Simpan gambar opsi A, B, C, D ke storage
        $pathA = $request->file('A')->store('kuis_images', 'public');
        $pathB = $request->file('B')->store('kuis_images', 'public');
        $pathC = $request->file('C')->store('kuis_images', 'public');
        $pathD = $request->file('D')->store('kuis_images', 'public');

        // Simpan soal ke database
        $question = KuisTerjemahanLatinKeAksara::create([
            'soal' => $request->soal,
            'A' => $pathA,
            'B' => $pathB,
            'C' => $pathC,
            'D' => $pathD,
            'jawaban' => $request->jawaban,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Soal berhasil ditambahkan!',
            'data' => $question
        ]);
    }
}
