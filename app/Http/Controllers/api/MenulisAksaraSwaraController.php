<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenulisAksaraSwara;

class MenulisAksaraSwaraController extends Controller
{
    public function index()
    {
        // Ambil semua data Aksara Swara
        $aksara = MenulisAksaraSwara::all();

        // Format URL gambar agar bisa diakses di Android
        $aksara->transform(function ($item) {
            $item->gambar_aksara = url('storage/' . $item->gambar_aksara);
            $item->gambar_pola = url('storage/' . $item->gambar_pola);
            return $item;
        });

        // Kembalikan response dalam format JSON
        return response()->json([
            'success' => true,
            'data' => $aksara
        ], 200);
    }
}