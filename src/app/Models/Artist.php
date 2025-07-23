<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    // Izinkan kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'birthdate',
        'music',
        'youtube',
        'image',
    ];

    // Konversi otomatis kolom birthdate ke tipe Carbon (tanggal)
    protected $casts = [
        'birthdate' => 'date',
    ];
}
