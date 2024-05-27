<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'email' => 'required|email|unique:anggota,email',
            'tanggal_bergabung' => 'required|date',
        ]);

        Anggota::create($request->all());
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Ambil data anggota dari database berdasarkan $id
        $anggota = Anggota::findOrFail($id);

        // Tampilkan view untuk mengedit data dengan menyertakan data anggota yang ingin diedit
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'email' => 'required|email',
            'tanggal_bergabung' => 'required|date',
        ]);

        // Temukan anggota berdasarkan ID
        $anggota = Anggota::findOrFail($id);

        // Update data anggota dengan data yang diterima dari request
        $anggota->update($request->all());

        // Redirect ke halaman daftar anggota dengan pesan sukses
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil diperbarui.');
    }

    public function destroy($id_anggota)
    {
        $anggota = Anggota::findOrFail($id_anggota);
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus.');
    }


}
