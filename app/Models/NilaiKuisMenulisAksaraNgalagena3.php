<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKuisMenulisAksaraNgalagena3 extends Model
{
    use HasFactory;
    // Nama tabel
    protected $table = 'nilai_kuis_menulis_aksara_ngalagena_3';

    // Kolom yang bisa diisi
    protected $fillable = [
        'siswa_id',
        'tanggal',
        'aksara_wa',
        'aksara_sa',
        'aksara_ha',
        'aksara_fa',
        'aksara_va',
        'aksara_qa',
        'aksara_xa',
        'aksara_za',
    ];
    
  // Relasi ke model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
