<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denda extends Model
{
    use HasFactory;

    /**
     * Hitung jumlah denda berdasarkan peminjaman.
     *
     * @param  Peminjaman  $peminjaman
     * @return int
     */
    public static function hitungDenda(Peminjaman $peminjaman)
    {
        // Ambil tanggal pengembalian
        $tanggalKembali = $peminjaman->tanggal_kembali;

        // Ambil tanggal seharusnya dikembalikan
        $tanggalHarusKembali = $peminjaman->tanggal_harus_kembali;

        // Hitung selisih hari
        $selisihHari = strtotime($tanggalKembali) - strtotime($tanggalHarusKembali);
        $selisihHari = $selisihHari / (60 * 60 * 24);

        // Hitung denda (misalnya 1000 per hari)
        $dendaPerHari = 1000;
        $jumlahDenda = $selisihHari * $dendaPerHari;

        // Pastikan tidak ada denda negatif
        return max(0, $jumlahDenda);
    }
}

