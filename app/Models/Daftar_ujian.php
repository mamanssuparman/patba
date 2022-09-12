<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar_ujian extends Model
{
    use HasFactory;
    protected $fillable = [
        'pelajarans_id',
        'nama_ujian',
        'waktu_ujian',
        'waktu_selesai',
        'score_nilai',
        'jumlah_soal',
        'score_max'
    ];
    protected $table = 'daftar_ujians';

    // Nilai balik relasi dari tabel Daftar Ujian
    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class, 'pelajarans_id', 'id');
    }

    // Relasi ke tabel detail_daftar_ujians 1 to M
    public function detail_daftar_ujians()
    {
        return $this->hasMany(Detail_daftar_ujian::class, 'daftar_ujians_id', 'id');
    }

    // Relasi ke tabel Ujian 1 to M
    public function ujians()
    {
        return $this->hasMany(Ujian::class, 'daftar_ujians_id', 'id');
    }
}
