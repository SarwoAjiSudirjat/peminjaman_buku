@extends('layout')

@section('content')
<div class="container">
    <h1>Daftar Denda</h1>
    <a href="{{ route('denda.create') }}" class="btn btn-primary mb-3">Tambah Denda Baru</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jumlah Denda</th>
                <th scope="col">Status Denda</th>
                <th scope="col">Peminjaman</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($denda as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->jumlah_denda }}</td>
                <td>{{ $item->status_denda }}</td>
                <td>{{ $item->peminjaman->nama_field }}</td> <!-- Ganti 'nama_field' dengan field yang sesuai di model Peminjaman -->
                <td>
                    <a href="{{ route('denda.edit', $item->id_denda) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('denda.destroy', $item->id_denda) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
