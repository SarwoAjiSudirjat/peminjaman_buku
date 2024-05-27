<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang di Perpustakaan</h1>
            <p class="lead">Aplikasi manajemen perpustakaan untuk anggota, petugas, peminjaman, dan denda.</p>
            <hr class="my-4">
            <p>Gunakan tautan berikut untuk mengakses berbagai bagian dari aplikasi:</p>
            <a class="btn btn-primary btn-lg" href="{{ route('anggota.index') }}" role="button">Masuk</a>
            {{-- <a class="btn btn-primary btn-lg" href="{{ route('petugas.index') }}" role="button">Daftar Petugas</a>
            <a class="btn btn-primary btn-lg" href="{{ route('peminjaman.index') }}" role="button">Daftar Peminjaman</a>
            <a class="btn btn-primary btn-lg" href="{{ route('denda.index') }}" role="button">Daftar Denda</a> --}}
        </div>
    </div>
</body>
</html>
