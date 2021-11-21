<?php
    session_start();
    include "koneksi.php";
    $cart = @$_SESSION['cart'];
    if (count($cart) > 0) {
        $tgl_transaksi = date('Y-m-d');
        $query_transaksi = mysqli_query($koneksi, "INSERT INTO transaksi (id_pelanggan, id_petugas, tgl_transaksi)
        VALUES ('".$_SESSION['id_pelanggan']."', '".$_SESSION['id_petugas']."', '".$tgl_transaksi."')");

        if ($query_transaksi) {
            $id = mysqli_insert_id($koneksi);
            foreach ($cart as $key => $value) {
                $qty = $value['qty'];
                $harga = $value['harga'];
                $subtotal = $qty*$harga;
                mysqli_query($koneksi, "INSERT INTO detail_transaksi (id_transaksi, id_product, qty, subtotal)
                VALUES ('".$id."', '".$value['id_product']."', '".$qty."', '".$subtotal."')");
            }
            unset($_SESSION['cart']);
            echo "<script>alert('Anda Berhasil Membeli Produk');location.href='history_pembelian.php'</script>";
        }
        else{
            // echo "<script>alert('Gagal Membeli Produk');location.href='checkout.php'</script>";
        }
    }
?>