<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksaraNgalagena extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'gambar_aksara', 'gambar_pola'];
}