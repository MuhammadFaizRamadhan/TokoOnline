<?php
    if($_POST){
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        
            include "koneksi.php";
            $query_login=mysqli_query($koneksi,"select * from pelanggan where username = '".$username."' and password = '".md5($password)."'");
            if(mysqli_num_rows($query_login)>0){
                $data_login=mysqli_fetch_array($query_login);
                session_start();
                $_SESSION['id_pelanggan']=$data_login['id_pelanggan'];
                $_SESSION['nama']=$data_login['nama'];
                $_SESSION['username']=$data_login['username'];
                $_SESSION['alamat']=$data_login['alamat'];
                $_SESSION['telp']=$data_login['telp'];
                $_SESSION['status_login']=true;
                echo "<script>alert('Login Berhasil');location.href='index.php';</script>";
            }   else {
                echo "<script>alert('username dan Password tidak benar');location.href='login.php';</script>";
            }
        
    }
?>