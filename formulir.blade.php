<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/formulir/proses" method="POST">
    @csrf
    <br>
    <label>Nama</label>
    <br>
    <input type="text" name="nama">
    <br>
    <label>Alamat</label>
    <br>
    <textarea name="alamat">
    <br>
    <input type="submit" value="Simpan">
</body>
</html>