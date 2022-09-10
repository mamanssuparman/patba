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
}
