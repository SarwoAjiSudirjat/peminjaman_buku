@extends('layout')

@section('content')
<div class="container">
    <h1>Tambah Denda Baru</h1>
    <form action="{{ route('denda.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="jumlah_denda">Jumlah Denda:</label>
            <input type="number" class="form-control" id="jumlah_denda" name="jumlah_denda" required>
        </div>
        <div class="form-group">
            <label for="status_denda">Status Denda:</label>
            <input type="text" class="form-control" id="status_denda" name="status_denda" required>
        </div>
        <div class="form-group">
            <label for="id_peminjaman">ID Peminjaman:</label>
            <input type="number" class="form-control" id="id_peminjaman" name="id_peminjaman" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
