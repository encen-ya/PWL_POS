<!DOCTYPE html>
<html>
<head>
    <title>Hapus User</title>
</head>
<body>

<h2>Hapus Data User</h2>

<p>Apakah Anda yakin ingin menghapus data user berikut?</p>

<table border="1" cellpadding="10">
    <tr>
        <td>ID</td>
        <td>{{ $data->user_id }}</td>
    </tr>

    <tr>
        <td>Username</td>
        <td>{{ $data->username }}</td>
    </tr>

    <tr>
        <td>Nama</td>
        <td>{{ $data->nama }}</td>
    </tr>

    <tr>
        <td>Level</td>
        <td>{{ $data->level_id }}</td>
    </tr>
</table>

<br>

<form action="/user/hapus_simpan/{{ $data->user_id }}" method="post">
    @csrf

    <button type="submit">Hapus</button>
    <a href="/user">Batal</a>

</form>

</body>
</html>