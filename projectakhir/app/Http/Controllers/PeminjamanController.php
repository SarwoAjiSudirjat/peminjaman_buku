<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with('anggota', 'buku', 'petugas')->get();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $anggota = Anggota::all();
        $buku = Buku::all();
        $petugas = Petugas::all();
        return view('peminjaman.create', compact('anggota', 'buku', 'petugas'));
    }

    public function store(Request $request)
    {
        Peminjaman::create($request->all());
        return redirect()->route('peminjaman.index');
    }





    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.show', compact('peminjaman'));
    }

    public function hitungDenda(Peminjaman $peminjaman)
    {
        $jumlahDenda = $peminjaman->denda->hitungDenda($peminjaman);
        return view('peminjaman.hitung_denda', compact('jumlahDenda'));
    }
}



