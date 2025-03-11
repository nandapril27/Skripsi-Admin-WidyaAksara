<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKuisTerjemahanLatinKeAksara extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'nilai_kuis_terjemahan_latin_ke_aksara';

    // Kolom yang bisa diisi
    protected $fillable = [
        'siswa_id',
        'Nilai',
    ];

     // Relasi ke model Siswa
     public function siswa()
     {
         return $this->belongsTo(siswa::class, 'siswa_id');
     }

     //Relasi ke model kuis Aksara ke Latin

    public function kuis()
    {
        return $this->belongsTo(KuisTerjemahanLatinKeAksara::class, 'kuis_id');
    }
}
