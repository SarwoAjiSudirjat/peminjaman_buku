@extends('layout')

@section('content')
<div class="container">
    <h1>Daftar Anggota</h1>
    <a href="{{ route('anggota.create') }}" class="btn btn-primary mb-3">Tambah Anggota</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Tanggal Bergabung</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggota as $a)
            <tr>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->alamat }}</td>
                <td>{{ $a->no_telepon }}</td>
                <td>{{ $a->email }}</td>
                <td>{{ $a->tanggal_bergabung }}</td>
                <td>
                    <a href="{{ route('anggota.edit', $a->id_anggota) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('anggota.destroy', $a->id_anggota) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
