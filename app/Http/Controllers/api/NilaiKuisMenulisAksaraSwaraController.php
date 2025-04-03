<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NilaiKuisMenulisAksaraSwara;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class NilaiKuisMenulisAksaraSwaraController extends Controller
{
    // Ambil semua data nilai kuis
    public function index()
    {
        $data = NilaiKuisMenulisAksaraSwara::with('siswa')->get();

        return response()->json([
            'success' => true,
            'message' => 'List semua nilai kuis menulis Aksara Swara',
            'data' => $data
        ], 200);
    }

    // Simpan nilai baru
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'siswa_id' => 'required|exists:siswas,id',
            'tanggal' => 'required|date',
            'aksara_a' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'aksara_é' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'aksara_i' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'aksara_o' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'aksara_u' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'aksara_e' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'aksara_eu' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 400);
        }

        // Simpan file gambar jika ada
        $data = $request->only(['siswa_id', 'tanggal']);
        foreach (['aksara_a', 'aksara_é', 'aksara_i', 'aksara_o', 'aksara_u', 'aksara_e', 'aksara_eu'] as $aksara) {
            if ($request->hasFile($aksara)) {
                $data[$aksara] = $request->file($aksara)->store('uploads/aksara', 'public');
            }
        }

        // Simpan data ke database
        $nilaiKuis = NilaiKuisMenulisAksaraSwara::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Nilai kuis berhasil ditambahkan',
            'data' => $nilaiKuis
        ], 201);
    }

    // Ambil nilai berdasarkan ID
    public function show($id)
    {
        $nilaiKuis = NilaiKuisMenulisAksaraSwara::with('siswa')->find($id);

        if (!$nilaiKuis) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail nilai kuis',
            'data' => $nilaiKuis
        ], 200);
    }

    // Update nilai kuis
    public function update(Request $request, $id)
    {
        $nilaiKuis = NilaiKuisMenulisAksaraSwara::find($id);

        if (!$nilaiKuis) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $data = $request->only(['siswa_id', 'tanggal']);
        foreach (['aksara_a', 'aksara_é', 'aksara_i', 'aksara_o', 'aksara_u', 'aksara_e', 'aksara_eu'] as $aksara) {
            if ($request->hasFile($aksara)) {
                if ($nilaiKuis->$aksara) {
                    Storage::disk('public')->delete($nilaiKuis->$aksara);
                }
                $data[$aksara] = $request->file($aksara)->store('uploads/aksara', 'public');
            }
        }

        $nilaiKuis->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Nilai kuis berhasil diperbarui',
            'data' => $nilaiKuis
        ], 200);
    }

    // Hapus nilai kuis
    public function destroy($id)
    {
        $nilaiKuis = NilaiKuisMenulisAksaraSwara::find($id);

        if (!$nilaiKuis) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        foreach (['aksara_a', 'aksara_é', 'aksara_i', 'aksara_o', 'aksara_u', 'aksara_e', 'aksara_eu'] as $aksara) {
            if ($nilaiKuis->$aksara) {
                Storage::disk('public')->delete($nilaiKuis->$aksara);
            }
        }

        $nilaiKuis->delete();

        return response()->json([
            'success' => true,
            'message' => 'Nilai kuis berhasil dihapus'
        ], 200);
    }
}
