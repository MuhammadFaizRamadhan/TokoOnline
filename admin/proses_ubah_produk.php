<?php
include 'koneksi.php';

    $id_product=$_POST['id_product'];
    $nama_product=$_POST['nama_product'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];

    $temp=$_FILES['foto_product']['tmp_name'];
    $type=$_FILES['foto_product']['type'];
    $size=$_FILES['foto_product']['size'];
    $name= rand(0,9999).$_FILES['foto_product']['name'];
    $folder = 'foto_product/';

    $sql = "select * from product where id_product = '$id_product'";
    $query = mysqli_query($koneksi, $sql);
    $product= mysqli_fetch_array($query);
    $path = $folder.$product["foto_product"];
    $id_merek=$_POST['id_merek'];

    if (file_exists($path)) {
        unlink($path);
    }

    if ($size < 999999999999 and ($type == "image/png" or $type == "image/jpg" or $type == "image/jpeg")) {
        move_uploaded_file($temp, $folder . $name);
        $update=mysqli_query($koneksi,"update product set nama_product='".$nama_product."', deskripsi='".$deskripsi."', harga='".$harga."', foto_product='".$name."', id_merek='".$id_merek."' where id_product = '".$id_product."'") or die(mysqli_error($koneksi));
        if ($update) {
            echo "<script>alert('Berhasil');location.href='tampil_produk.php';</script>";
        } else {
            echo "<script>alert('Gagal');location.href='ubah_produk.php';</script>";
        }
    } else {
        echo "<script>alert('File tidak Sesuai');location.href='ubah_produk.php';</script>";
    }
    
?>