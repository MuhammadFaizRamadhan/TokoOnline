<?php
    $servername = "localhost";
    $userName = "root";
    $password = "";
    $database = "toko_online";

    $koneksi = mysqli_connect($servername, $userName, $password, $database);

    // if (!$koneksi) {
    //     die("koneksi gagal".mysqli_connect_error());
    // }
    // else{
    //     echo "koneksi berhasil";
    // }
?>