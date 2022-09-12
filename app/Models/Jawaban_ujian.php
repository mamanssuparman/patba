<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban_ujian extends Model
{
    use HasFactory;
    protected $fillable = [
        'soal_ujian_id',
        'jawabans_id',
        'jawaban_pilih',
        'jawaban_orders',
    ];
    protected $table = 'jawaban_ujians';
    // Nilai balik relasi ke tabel soal_ujians
    public function soal_ujian()
    {
        return $this->belongsTo(Soal_ujian::class, 'soal_ujian_id', 'idf');
    }
    // Nilai balik relasi ke tabel jawaban
    public function jawaban()
    {
        return $this->belongsTo(Jawaban::class, 'jawabans_id', 'id');
    }
}
