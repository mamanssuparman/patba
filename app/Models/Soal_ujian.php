<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal_ujian extends Model
{
    use HasFactory;
    protected $fillable = [
        'ujians_id',
        'soals_id',
        'nilai',
        'waktu_tampil',
        'ujian_order_id'
    ];
    protected $table = 'soal_ujians';
    // Nilai balik relasi ke tabel Ujian
    public function ujian()
    {
        return $this->belongsTo(Ujian::class, 'ujians_id', 'id');
    }
    // Relasi ke tabel jawaban ujians 1 to M
    public function jawaban_ujian()
    {
        return $this->hasMany(Jawaban_ujian::class, 'soal_ujians_id', 'id');
    }
}
