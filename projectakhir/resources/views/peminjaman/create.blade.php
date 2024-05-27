<!DOCTYPE html>
<html>
<head>
    <title>Tambah Peminjaman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        select, input[type="date"], input[type="text"], button {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Peminjaman</h1>
        <form method="POST" action="{{ route('peminjaman.store') }}">
            @csrf
            <label for="id_anggota">Anggota:</label>
            <select name="id_anggota" id="id_anggota">
                @foreach($anggota as $a)
                    <option value="{{ $a->id_anggota }}">{{ $a->nama }}</option>
                @endforeach
            </select>
            <label for="id_buku">Buku:</label>
            <select name="id_buku" id="id_buku">
                @foreach($buku as $b)
                    <option value="{{ $b->id_buku }}">{{ $b->judul }}</option>
                @endforeach
            </select>
            <label for="id_petugas">Petugas:</label>
            <select name="id_petugas" id="id_petugas">
                @foreach($petugas as $p)
                    <option value="{{ $p->id_petugas }}">{{ $p->nama }}</option>
                @endforeach
            </select>
            <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
            <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" required>
            <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
            <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" required>
            <label for="status_pengembalian">Status Pengembalian:</label>
            <input type="text" name="status_pengembalian" id="status_pengembalian" required>
            <button type="submit">Tambah</button>
        </form>
    </div>
</body>
</html>
