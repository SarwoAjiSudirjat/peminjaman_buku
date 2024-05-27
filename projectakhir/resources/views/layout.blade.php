<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Perpustakaan</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/anggota') }}">Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/buku') }}">Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/peminjaman') }}">Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/denda') }}">Denda</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
