<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_barang = $_POST["nama_barang"];
        $harga = $_POST["harga"];
        $gambar = $_FILES["gambar"];

        if ($gambar["error"] == 0) {
            $nama_file = uniqid() . "." . $gambar["type"];
            move_uploaded_file($gambar["tmp_name"], "./upload/{$nama_file}");
        } else {
            $nama_file = "";
        }

        echo "
            <h1>Hasil</h1>
            <p>Nama Barang: <b>{$nama_barang}</b></p>
            <p>Harga: <b>{$harga}</b></p>
            <p>Gambar: <img src='./images/produk/{$nama_file}'></p>
        ";
    }
?>
