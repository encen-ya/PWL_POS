<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
</head>
<body>
    <h1>Data Kategori Barang</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
        </tr>
        @foreach ($data as $row)
        <tr>
            <td>{{ $row->kategori_id }}</td>
            <td>{{ $row->kategori_kode }}</td>
            <td>{{ $row->kategori_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>