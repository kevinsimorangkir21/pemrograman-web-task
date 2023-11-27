<!-- 
Kevin Simorangkir
121140150
RC 
-->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];

    $upload_folder = 'uploads/';
    $gambar_path = $upload_folder;

    echo "<h1> Hasil Inputan Barang </h1>";
    echo "Nama Barang : $nama_barang<br>";
    echo "Harga: $harga<br>";
    echo "Gambar: <img src='$gambar_path' alt='gambar'>";
}
?>
