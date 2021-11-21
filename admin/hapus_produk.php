<?php
include "koneksi.php";

    $id_product=$_GET['id_product'];

    $folder = 'foto_product/';
    $sql = "select * from product where id_product = '$id_product'";
    $query = mysqli_query($koneksi, $sql);
    $product= mysqli_fetch_array($query);
    $path = $folder.$product["foto_product"];
    if (file_exists($path)) {
        unlink($path);
    }
    $sql = "delete from product where id_product= '$id_product'";

    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "<script>alert('Berhasil');location.href='tampil_produk.php';</script>";
    } else {
        echo "<script>alert('Gagal');location.href='hapus_produk.php';</script>";
    }


?>