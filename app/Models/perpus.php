<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perpus extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'judul', 'penulis', 'tahun_terbit',
    ];
}
