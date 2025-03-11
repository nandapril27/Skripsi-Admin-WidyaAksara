<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuisTerjemahanAksaraKeLatin extends Model
{
    use HasFactory;

    protected $table = 'kuis_terjemahan_aksara_ke_latins';

    protected $fillable = ['soal', 'A', 'B', 'C', 'D', 'jawaban'];
}
