<!-- Kevin Simorangkir
121140150
RC -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Barang | BXE.Vin</title>
</head>
<body>
    <h1>Formulir Input Barang</h1>
    <form action="proses-form-barang.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nama_barang" placeholder="Nama Barang" required>
        <input type="number" name="harga" placeholder="Harga" required>
        <input type="file" name="gambar" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
