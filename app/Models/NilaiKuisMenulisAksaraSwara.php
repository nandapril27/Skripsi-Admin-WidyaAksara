<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKuisMenulisAksaraSwara extends Model
{
    use HasFactory;
    // Nama tabel
    protected $table = 'nilai_kuis_menulis_aksara_swara';

    // Kolom yang bisa diisi
    protected $fillable = [
        'siswa_id',
        'tanggal',
        'aksara_a',
        'aksara_é',
        'aksara_i',
        'aksara_o',
        'aksara_u',
        'aksara_e',
        'aksara_eu',
    ];
    
  // Relasi ke model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
