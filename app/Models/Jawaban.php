<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $fillable = [
        'soals_id',
        'description',
        'status'
    ];
    protected $table = 'jawabans';
    // Nilai balik relasi ke tabel soals
    public function soal()
    {
        return $this->belongsTo(Soal::class, 'soals_id', 'id');
    }
}
