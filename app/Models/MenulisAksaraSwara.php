<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenulisAksaraSwara extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'gambar_aksara', 'gambar_pola'];
}
