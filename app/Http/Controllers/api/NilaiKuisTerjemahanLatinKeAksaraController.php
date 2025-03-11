<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NilaiKuisTerjemahanLatinKeAksara;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class NilaiKuisTerjemahanLatinKeAksaraController extends Controller
{
    // Fungsi untuk menyimpan nilai kuis dari Android
    public function store(Request $request)
    {
        try {
            DB::enableQueryLog();
            // Validasi data yang dikirim dari Android
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

            // Simpan nilai ke database menggunakan objek model
            $nilai = new NilaiKuisTerjemahanLatinKeAksara();
            $nilai->siswa_id = $siswa->id;
            $nilai->nilai = $validated['nilai'];
            $nilai->tanggal = $validated['tanggal'];
            $nilai->save(); // Simpan ke database

            // Ambil kembali data yang telah disimpan dengan relasi siswa
            $nilai = NilaiKuisTerjemahanLatinKeAksara::with('siswa')->find($nilai->id);

            // Kirim respons ke Android
            return response()->json([
                'success' => true,
                'message' => 'Nilai berhasil disimpan',
                'data' => $nilai
            ], 201);
        } catch (\Exception $e) {
            Log::error($e->getMessage()); // Log error untuk debugging
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage(),
            ], 500);
        }
    }
    

    // Fungsi untuk mengambil nilai kuis berdasarkan NIS
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
    
        // Ambil data nilai berdasarkan siswa_id yang ditemukan
        $nilai = NilaiKuisTerjemahanLatinKeAksara::where('siswa_id', $siswa->id)
            ->select('id', 'siswa_id', 'nilai', 'tanggal', 'created_at') 
            ->with(['siswa:id,NIS,NAMA']) // Ambil Nama siswa
            ->orderBy('created_at', 'desc') // Urutkan dari yang terbaru
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'siswa_id' => $item->siswa_id,
                    'nilai' => $item->nilai,
                    'tanggal' => $item->tanggal,
                    'jam' => Carbon::parse($item->created_at)->format('H:i:s'), // Format waktu dari created_at
                    'siswa' => $item->siswa ? [
                        'NIS' => $item->siswa->NIS,
                        'NAMA' => $item->siswa->NAMA,
                    ] : null
                ];
            });
    
        if ($nilai->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Siswa tidak memiliki nilai kuis'
            ], 404);
        }
    
        return response()->json([
            'success' => true,
            'message' => 'Data nilai ditemukan',
            'data' => $nilai
        ]);
    }
}
