<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_daftar_ujian extends Model
{
    use HasFactory;
    protected $fillable = [
        'daftar_ujians_id',
        'kelas_id',
    ];
    protected $table = 'detail_daftar_ujians';

    // Nilai balik relasi dari tabel Daftar Ujian
    public function daftar_ujians()
    {
        return $this->belongsTo(Daftar_ujian::class, 'daftar_ujians_id', 'id');
    }

    // Nilai balik relasi dari tabel kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}
