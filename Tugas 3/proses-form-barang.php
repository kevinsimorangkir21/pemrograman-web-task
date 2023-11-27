<!-- Kevin Simorangkir
121140150
RC -->

<!-- prosesinput.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $gambar = $_FILES["gambar"];

    // Simpan gambar ke folder (contoh folder: uploads)
    $upload_folder = 'uploads/';
    $gambar_path = $upload_folder;

    // Tampilkan hasil
    echo "<h1>Hasil Input Barang</h1>";
    echo "Nama Barang: $nama_barang<br>";
    echo "Harga: $harga<br>";
    echo "Gambar: <img src='$gambar_path' alt='gambar barang'>";
}
?>
