<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Barang</title>
</head>
<body>
    <h1>Form Input Barang</h1>
    <form action="proses-form-barang.php" method="post">
        <input type="text" name="nama_barang" placeholder="Nama Barang" required>
        <input type="number" name="harga" placeholder="Harga" required>
        <input type="file" name="gambar" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
