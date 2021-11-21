<?php
if($_POST){
    $id_pelanggan=$_POST['id_pelanggan'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];

    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tampil_pelanggan.php';</script>";
 
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tampil_pelanggan.php';</script>";
    }else {
        include "koneksi.php";
        $update=mysqli_query($koneksi,"update pelanggan set nama='".$nama."', username='".$username."', alamat='".$alamat."', telp='".$telp."' where id_pelanggan = '".$id_pelanggan."'") or die(mysqli_error($koneksi));
        if($update){
            echo "<script>alert('Sukses update pelanggan');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal update pelanggan');location.href='profil.php?id_pelanggan=".$id_pelanggan."';</script>";
        }
    }
}
?>