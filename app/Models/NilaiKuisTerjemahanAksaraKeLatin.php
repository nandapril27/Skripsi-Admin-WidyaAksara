<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKuisTerjemahanAksaraKeLatin extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'nilai_kuis_terjemahan_aksara_ke_latins';

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

    // Relasi ke model KuisTerjemahanAksaraKeLatin
    public function kuis()
    {
        return $this->belongsTo(KuisTerjemahanAksaraKeLatin::class, 'kuis_id');
    }
}
