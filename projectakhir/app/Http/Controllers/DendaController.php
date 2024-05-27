<?php

namespace App\Http\Controllers;

use App\Models\Denda;
use Illuminate\Http\Request;

class DendaController extends Controller
{
    public function index()
    {
        $denda = Denda::all();
        return view('denda.index', compact('denda'));
    }

    public function create()
    {
        // Logika untuk menampilkan form pembuatan denda
        return view('denda.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'jumlah_denda' => 'required|integer',
            'status_denda' => 'required|string',
            'id_peminjaman' => 'required|integer',
        ]);

        // Simpan data denda baru
        Denda::create($validatedData);

        return redirect()->route('denda.index')->with('success', 'Data denda berhasil disimpan.');
    }
}
