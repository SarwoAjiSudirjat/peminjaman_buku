<!DOCTYPE html>
<html>
<head>
    <title>Tambah Petugas</title>
</head>
<body>
    <h1>Tambah Petugas</h1>
    <form method="POST" action="{{ route('petugas.store') }}">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>Shift:</label>
        <input type="text" name="shift" required>
        <label>No Telepon:</label>
        <input type="text" name="no_telepon" required>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
