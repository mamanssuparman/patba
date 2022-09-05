<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $fillable = [
        'soal',
        'pelajaran_id',
    ];
    protected $table = 'soals';
    // nilai balik relasi ke tabel pelajaran
    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class, 'pelajaran_id', 'id');
    }

    // Relasi ke tabel Jawabans 1 to M
    public function jawabans()
    {
        return $this->hasMany(Jawaban::class, 'soals_id', 'id');
    }
}
