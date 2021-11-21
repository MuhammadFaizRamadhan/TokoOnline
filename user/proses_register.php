<?php
    if($_POST){
        $nama=$_POST['nama'];
        $username=$_POST['username'];
        $password= $_POST['password'];
        $alamat=$_POST['alamat'];
        $telp=$_POST['telp'];
        if(empty($nama)){
            echo "<script>alert('nama tidak boleh
            kosong');location.href='register.php'</script>";
        }
        elseif(empty($password)){
            echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
        }
        else {
            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into pelanggan (nama, username, password, alamat, telp)
            value ('".$nama."','".$username."','".md5($password)."','".$alamat."','".$telp."')") or 
            die(mysqli_error($koneksi));
            if($insert){
                echo "<script>alert('Sukses menambahkan pelanggan');location.href='login.php';</script>";
            }
            else {
                echo "<script>alert('Gagal menambahkan pelanggan');location.href='register.php';</script>";
            }
        }
    }
?>