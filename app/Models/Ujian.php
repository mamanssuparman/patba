<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;
    protected $fillable =[
        'daftar_ujians_id',
        'users_id',
        'status_ujian',
        'score',
        'token'
    ];
    protected $table='ujians';
}
