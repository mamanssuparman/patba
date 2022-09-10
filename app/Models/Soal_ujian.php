<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal_ujian extends Model
{
    use HasFactory;
    protected $fillable= [
        'ujians_id',
        'soals_id',
        'nilai',
        'waktu_tampil',
        'ujian_order_id'
    ];
    protected $table = 'soal_ujians';
}
