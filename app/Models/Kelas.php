<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kelas'
    ];
    protected $table = 'kelas';

    // Relasi ke tabel detail daftar ujians 1 to M
    public function detail_daftar_ujian()
    {
        return $this->hasMany(Detail_daftar_ujian::class, 'kelas_id', 'id');
    }

    // Relasi ke tabel users
    public function user()
    {
        return $this->hasMany(User::class, 'kelas_id', 'id');
    }
}
