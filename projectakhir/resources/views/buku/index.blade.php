@extends('layout')

@section('content')
<div class="container">
    <h1>Daftar Buku</h1>
    <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Kategori</th>
                <th scope="col">ISBN</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($buku as $b)
            <tr>
                <td>{{ $b->judul }}</td>
                <td>{{ $b->penulis }}</td>
                <td>{{ $b->penerbit }}</td>
                <td>{{ $b->tahun_terbit }}</td>
                <td>{{ $b->kategori }}</td>
                <td>{{ $b->isbn }}</td>
                <td>
                    <a href="{{ route('buku.edit', $b->id_buku) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('buku.destroy', $b->id_buku) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
