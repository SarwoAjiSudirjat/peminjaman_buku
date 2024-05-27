@extends('layout')

@section('content')
<div class="container">
    <h1>Edit Anggota</h1>
    <form action="{{ route('anggota.update', $anggota->id_anggota) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $anggota->nama }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $anggota->alamat }}" required>
        </div>
        <div class="form-group">
            <label for="no_telepon">No Telepon:</label>
            <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{ $anggota->no_telepon }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $anggota->email }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_bergabung">Tanggal Bergabung:</label>
            <input type="date" class="form-control" id="tanggal_bergabung" name="tanggal_bergabung" value="{{ $anggota->tanggal_bergabung }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
