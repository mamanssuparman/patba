<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'kelas_id'
    ];
    protected $table = 'pelajarans';
    // Nilai balik relasi ke tabel kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
    // Relasi ke tabel soal 1 to M
    public function soals()
    {
        return $this->hasMany(Soal::class, 'pelajaran_id', 'id');
    }

    // Relasi ke tabel daftar ujian 1 to 1
    public function daftar_ujian()
    {
        return $this->hasOne(Daftar_ujian::class, 'pelajarans_id', 'id');
    }
}
