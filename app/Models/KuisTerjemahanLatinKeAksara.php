<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuisTerjemahanLatinKeAksara extends Model
{
    use HasFactory;

    protected $table = 'kuis_terjemahan_latin_ke_aksaras';

    protected $fillable = ['soal', 'A', 'B', 'C', 'D', 'jawaban'];
}