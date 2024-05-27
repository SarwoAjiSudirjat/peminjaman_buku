@extends('layout')

@section('content')
<div class="container">
    <h1>Daftar Denda</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID Denda</th>
                <th>Jumlah Denda</th>
                <th>Status Denda</th>
                <th>ID Peminjaman</th>
            </tr>
        </thead>
        <tbody>
            @foreach($denda as $item)
            <tr>
                <td>{{ $item->id_denda }}</td>
                <td>{{ $item->jumlah_denda }}</td>
                <td>{{ $item->status_denda }}</td>
                <td>{{ $item->id_peminjaman }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
