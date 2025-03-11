<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKuisMenulisAksaraNgalagena2 extends Model
{
    use HasFactory;
    // Nama tabel
    protected $table = 'nilai_kuis_menulis_aksara_ngalagena_2';

    // Kolom yang bisa diisi
    protected $fillable = [
        'siswa_id',
        'tanggal',
        'aksara_da',
        'aksara_na',
        'aksara_pa',
        'aksara_ba',
        'aksara_ma',
        'aksara_ya',
        'aksara_ra',
        'aksara_la',
    ];
    
  // Relasi ke model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
