<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer',
            'kategori' => 'required|string',
            'isbn' => 'required|string',
        ]);

        $buku = new Buku();
        $buku->judul = $validatedData['judul'];
        $buku->penulis = $validatedData['penulis'];
        $buku->penerbit = $validatedData['penerbit'];
        $buku->tahun_terbit = $validatedData['tahun_terbit'];
        $buku->kategori = $validatedData['kategori'];
        $buku->isbn = $validatedData['isbn'];

        $buku->save();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Ambil data buku dari database berdasarkan $id
        $buku = Buku::findOrFail($id);

        // Tampilkan view untuk mengedit data dengan menyertakan data buku yang ingin diedit
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer',
            'kategori' => 'required|string',
            'isbn' => 'required|string',
        ]);

        // Temukan buku berdasarkan ID
        $buku = Buku::findOrFail($id);

        // Update data buku dengan data yang diterima dari request
        $buku->update($validatedData);

        // Redirect ke halaman daftar buku dengan pesan sukses
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
