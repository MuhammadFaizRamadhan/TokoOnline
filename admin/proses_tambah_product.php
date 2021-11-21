<?php
include 'koneksi.php';

    $nama_product=$_POST['nama_product'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    // $foto_product=$_FILES['foto_product']['name'];

    $temp=$_FILES['foto_product']['tmp_name'];
    $type=$_FILES['foto_product']['type'];
    $size=$_FILES['foto_product']['size'];
    $name= rand(0,9999).$_FILES['foto_product']['name'];
    $folder = 'foto_product/';
    $id_merek=$_POST['id_merek'];

    // echo $nama_product;
    // echo $deskripsi;
    // echo $harga;
    // echo $name;
    if ($size < 999999999999 and ($type == "image/png" or $type == "image/jpg" or $type == "image/jpeg")) {
        move_uploaded_file($temp, $folder . $name);
        $input = mysqli_query ($koneksi, "INSERT INTO product (nama_product, deskripsi, harga, foto_product, id_merek) VALUES ('".$nama_product."', '".$deskripsi."', '".$harga."', '".$name."', '".$id_merek."')");
        if ($input) {
            echo "<script>alert('Berhasil');location.href='tampil_produk.php';</script>";
        } else {
            echo "<script>alert('Gagal');location.href='tambah_product.php';</script>";
        }
        
    } else {
        echo "<script>alert('File tidak Sesuai');location.href='tambah_product.php';</script>";
    }
    
?>