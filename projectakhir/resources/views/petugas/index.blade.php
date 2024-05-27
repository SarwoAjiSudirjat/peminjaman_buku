<!DOCTYPE html>
<html>
<head>
    <title>Daftar Petugas</title>
</head>
<body>
    <h1>Daftar Petugas</h1>
    <a href="{{ route('petugas.create') }}">Tambah Petugas</a>
    <ul>
        @foreach($petugas as $p)
            <li>{{ $p->nama }} - {{ $p->shift }}</li>
        @endforeach
    </ul>
</body>
</html>
