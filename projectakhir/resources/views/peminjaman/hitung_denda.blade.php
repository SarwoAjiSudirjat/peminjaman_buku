@extends('layout')

@section('content')
<div class="container">
    <h1>Hitung Denda</h1>
    <div class="form-group">
        <label for="jumlah_denda">Jumlah Denda:</label>
        <input type="text" class="form-control" id="jumlah_denda" name="jumlah_denda" value="{{ $jumlahDenda }}" readonly>
    </div>
</div>
@endsection
