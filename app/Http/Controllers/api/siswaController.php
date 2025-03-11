<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\siswa;


class SiswaController extends Controller
{
    /**
     * Login siswa dengan NIS
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'NIS' => 'required|numeric', // Validasi NIS (wajib angka)
            'NAMA' => 'required|string', // Validasi NAMA (wajib teks)
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Cari siswa berdasarkan NIS dan NAMA
        $siswa = siswa::where('NIS', $request->NIS)
                        ->where('NAMA', $request->NAMA)
                        ->first(); // Pastikan nama kolom sesuai dengan database

                        if (!$siswa) {
                            return response()->json([
                                'success' => false,
                                'message' => 'NIS atau NAMA salah',
                            ], 404);
                        }    

        // Return data siswa
        return response()->json([
            'success' => true,
            'message' => 'Login berhasil',
            'data' => [
                'NIS' => $siswa->NIS,   // Pastikan ini sesuai dengan nama kolom di database
                'NAMA' => $siswa->NAMA, // Pastikan ini sesuai dengan nama kolom di database
            ],
        ]);
    }
}
