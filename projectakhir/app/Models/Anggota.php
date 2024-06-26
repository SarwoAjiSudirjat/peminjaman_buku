<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $fillable = [
        'nama', 'alamat', 'no_telepon', 'email', 'tanggal_bergabung'
    ];

    public $timestamps = true;
}
