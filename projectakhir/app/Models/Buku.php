<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    protected $fillable = [
        'judul', 'penulis', 'penerbit', 'tahun_terbit', 'kategori', 'isbn'
    ];

    public $timestamps = true;
}
