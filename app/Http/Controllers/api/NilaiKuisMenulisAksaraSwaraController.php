<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NilaiKuisMenulisAksaraSwara;
use App\Models\Siswa; 
use Carbon\Carbon; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class NilaiKuisMenulisAksaraSwaraController extends Controller
{
     /**
     * Menyimpan nilai kuis dari Android ke database.
     */
    public function store(Request $request)
    {
        try {
            DB::enableQueryLog();
            
            // Validasi request dari Android
            $validated = $request->validate([
                'NIS' => 'required|exists:siswas,NIS', // Pastikan NIS ada di tabel siswas
                'nilai' => 'required|numeric',
                'tanggal' => 'required|date',
            ]);

            // Cari siswa berdasarkan NIS
            $siswa = Siswa::where('NIS', $validated['NIS'])->first();

            if (!$siswa) {
                return response()->json([
                    'success' => false,
                    'message' => 'Siswa tidak ditemukan'
                ], 404);
            }

            // Simpan nilai kuis ke database
            $nilai = new NilaiKuisMenulisAksaraSwara();
            $nilai->siswa_id = $siswa->id;
            $nilai->nilai = $validated['nilai'];
            $nilai->tanggal = $validated['tanggal'];
            $nilai->save();

            // Ambil data terbaru dengan relasi siswa
            $nilai = NilaiKuisMenulisAksaraSwara::with('siswa')->find($nilai->id);

            return response()->json([
                'success' => true,
                'message' => 'Nilai berhasil disimpan',
                'data' => $nilai
            ], 201);
        } catch (\Exception $e) {
            Log::error($e->getMessage()); 
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage(),
            ], 500);
        }
    }

 /**
     * Menampilkan nilai kuis berdasarkan NIS siswa.
     */
    public function show($NIS)
    {
        // Cari siswa berdasarkan NIS
        $siswa = Siswa::where('NIS', $NIS)->first();

        if (!$siswa) {
            return response()->json([
                'success' => false,
                'message' => 'Siswa tidak ditemukan'
            ], 404);
        }

        // Ambil data nilai berdasarkan siswa_id
        $nilai = NilaiKuisMenulisAksaraSwara::where('siswa_id', $siswa->id)
            ->select('id', 'siswa_id', 'nilai', 'tanggal', 'created_at') 
            ->with('siswa:id,NIS,NAMA')
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'siswa_id' => $item->siswa_id,
                    'nilai' => $item->nilai,
                    'tanggal' => $item->tanggal,
                    'jam' => $item->created_at ? Carbon::parse($item->created_at)->format('H:i:s') : null,
                    'siswa' => $item->siswa ? [
                        'NIS' => $item->siswa->NIS,
                        'NAMA' => $item->siswa->NAMA,
                    ] : null
                ];
            });

        if ($nilai->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Siswa belum memiliki nilai kuis'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data nilai ditemukan',
            'data' => $nilai
        ]);
    }
}