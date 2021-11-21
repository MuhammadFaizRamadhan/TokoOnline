<?php
    $nama_merek = $_POST["nama_merek"];

    // echo $nama_merek;
    // echo $kelompok;
    include "koneksi.php";
    
    $input = mysqli_query($koneksi, "INSERT INTO merek (nama_merek) VALUES ('{$nama_merek}')");

    if ($input) {
        echo "<script>alert('Sukses tambah merek');location.href='tambah_merek.php';</script>";
    }
    else {
        echo "<script>alert('Gagal tambah merek');location.href='tambah_merek.php';</script>";
    }
?>