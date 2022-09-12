<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;
    protected $fillable = [
        'daftar_ujians_id',
        'users_id',
        'status_ujian',
        'score',
        'token'
    ];
    protected $table = 'ujians';
    // Relasi ke tabel soal ujian 1 to M
    public function soal_ujians()
    {
        return $this->hasMany(Soal_ujian::class, 'ujians_id', 'id');
    }
    // Nilai balik relasi ke tabel user
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    // Nilai balik relasi ke tabel daftar ujians
    public function daftar_ujian()
    {
        return $this->belongsTo(Daftar_ujian::class, 'daftar_ujians_id', 'id');
    }
}
