<?php
    session_start();
    if ($_POST) {
        include "koneksi.php";

        $query_get_product=mysqli_query($koneksi, "SELECT * FROM product WHERE id_product = '".$_POST['id_product']."'");
        $data_product = mysqli_fetch_array($query_get_product);

        $_SESSION['cart'][]=array(
            'id_product' => $data_product['id_product'],
            'nama_product' => $data_product['nama_product'],
            'harga' => $data_product['harga'],
            'qty' => $_POST['qty']
        );
    }
    header('location: cart.php');
?>