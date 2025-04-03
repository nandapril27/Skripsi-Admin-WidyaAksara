<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $guarded = [];

    protected $fillable = [
        'NIS',
        'NAMA',
       
    ];

    
    // Relasi ke model Nilai
    public function nilaiKuisTerjemahanAksaraKeLatin()
    {
        return $this->hasMany(NilaiKuisTerjemahanAksaraKeLatin::class, 'siswa_id');
    }
    
    public function nilaiKuisTerjemahanLatinKeAksara()
    {
        return $this->hasMany(NilaiKuisTerjemahanLatinKeAksara::class, 'siswa_id');
    }
    
    public function nilaiKuisMenulisAksaraSwara()
    {
        return $this->hasMany(NilaiKuisMenulisAksaraSwara::class, 'id');
    }
    
    public function nilaiKuisMenulisAksaraNgalagena()
    {
        return $this->hasMany(NilaiKuisMenulisAksaraNgalagena::class, 'id');
    }

    public function nilaiKuisMenulisAksaraNgalagena1()
    {
        return $this->hasMany(NilaiKuisMenulisAksaraNgalagena1::class, 'id');
    }
    
    public function nilaiKuisMenulisAksaraNgalagena2()
    {
        return $this->hasMany(NilaiKuisMenulisAksaraNgalagena2::class, 'id');
    }
    
    public function nilaiKuisMenulisAksaraNgalagena3()
    {
        return $this->hasMany(NilaiKuisMenulisAksaraNgalagena3::class, 'id');
    }
}    
