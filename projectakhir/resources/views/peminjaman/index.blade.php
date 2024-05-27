@extends('layout')

@section('content')
    <div class="container">
        <h1>Daftar Peminjaman</h1>
        <a href="{{ route('peminjaman.create') }}" class="btn btn-primary mb-3">Tambah Peminjaman</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama Anggota</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">ID Petugas</th>
                    <th scope="col">Status Pengembalian</th>
                    <th scope="col">Denda</th> <!-- Tambah kolom untuk denda -->
                </tr>
            </thead>
            <tbody>
                @foreach($peminjaman as $p)
                <tr>
                    <td>{{ $p->anggota->nama }}</td>
                    <td>{{ $p->buku->judul }}</td>
                    <td>{{ $p->id_buku }}</td>
                    <td>{{ $p->tanggal_peminjaman }}</td>
                    <td>{{ $p->tanggal_pengembalian }}</td>
                    <td>{{ $p->id_petugas }}</td>
                    <td>{{ $p->status_pengembalian }}</td>
                    <td>{{ optional($p->denda)->jumlah_denda }}</td>
                    <!-- Menampilkan jumlah denda -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
