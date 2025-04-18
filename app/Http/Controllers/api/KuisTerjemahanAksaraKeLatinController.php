<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KuisTerjemahanAksaraKeLatin;
use App\Models\siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class KuisTerjemahanAksaraKeLatinController extends Controller
{
    /**
     * Mendapatkan semua soal kuis.
     */
    public function getQuestions()
    {
        $questions = KuisTerjemahanAksaraKeLatin::all();
    
        // Ubah soal menjadi URL gambar yang bisa diakses
        $questions->transform(function ($question) {
            $question->soal = url('storage/' . $question->soal);
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
            'soal' => 'required|string',
            'A' => 'required|string',
            'B' => 'required|string',
            'C' => 'required|string',
            'D' => 'required|string',
            'jawaban' => 'required|string',
        ]);

        $question = KuisTerjemahanAksaraKeLatin::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Soal berhasil ditambahkan!',
            'data' => $question
        ]);
    }
}
