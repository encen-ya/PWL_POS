<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>

<h2>Data User</h2>
<a href="/user/tambah">Tambah Data User</a>
<table border="1" cellpadding="2" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Nama</th>
        <th>ID Level Pengguna</th>
        <th>Kode Level</th>
        <th>Nama Level</th>
        <th>Aksi</th>
    </tr>

@foreach($user as $u)
<tr> 
    <td>{{ $u->user_id }}</td> 
    <td>{{ $u->username }}</td> 
    <td>{{ $u->nama }}</td> 
    <td>{{ $u->level_id }}</td> 
    <td>{{ $u->level->level_kode }}</td> 
    <td>{{ $u->level->level_nama }}</td> 
    <td> <a href="/user/ubah/{{ $u->user_id }}">Ubah</a> | <a href="/user/hapus/{{ $u->user_id }}">Hapus</a> </td> 
</tr>
@endforeach

</table>

</body>
</html>