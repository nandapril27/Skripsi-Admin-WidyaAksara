<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKuisMenulisAksaraNgalagena1 extends Model
{
    use HasFactory;
    // Nama tabel
    protected $table = 'nilai_kuis_menulis_aksara_ngalagena_1';

    // Kolom yang bisa diisi
    protected $fillable = [
        'siswa_id',
        'tanggal',
        'aksara_ka',
        'aksara_ga',
        'aksara_nga',
        'aksara_ca',
        'aksara_ja',
        'aksara_nya',
        'aksara_ta',
    ];
    
  // Relasi ke model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
