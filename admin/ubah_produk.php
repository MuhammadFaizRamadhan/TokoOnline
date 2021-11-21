<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    include "koneksi.php";
    $query_get_product=mysqli_query($koneksi,"select * from product where id_product= '".$_GET['id_product']." ' ");
     $data_product=mysqli_fetch_array($query_get_product); 
    ?>

    <div class="container">
        <br>
        <h3>Ubah Product</h3>
        <form action= "proses_ubah_produk.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_product" value= "<?=$data_product ['id_product']; ?>" class="form-control">
            <br>
            <h5>Nama Product:</h5>
            <input type="text" name="nama_product" value= "<?=$data_product ['nama_product']; ?>" class="form-control">
            <br>
            <h5>Deskripsi:</h5>
            <input type="text" name="deskripsi" value= "<?=$data_product ['deskripsi']; ?>" class="form-control">
            <br>
            <h5>Harga:</h5>
            <input type="text" name="harga" value= "<?=$data_product ['harga']; ?>" class="form-control">
            <br>
            <h5>Foto Product:</h5>
            <img src="foto_product/<?php echo $data_product['foto_product']; ?>" style="width: 120px;">
            <input type="file" name="foto_product" />
            
            <!-- <input type="text" name="foto_product" value= "<?=$data_product ['foto_product']; ?>" class="form-control"> -->
            <br>
            <h5>merek:</h5>
                <select name="id_merek" class="form-control">
                    <option></option>
                    <?php 
                    include "koneksi.php";
                    $query_merek=mysqli_query($koneksi, "select * from merek");
                    while ($data_merek=mysqli_fetch_array($query_merek)) {
                        if($data_merek['id_merek']==$data_siswa['id_merek'] ) {
                        $select="selected";
                    } else {
                    $select="";
                    }
                    echo '<option value="'.$data_merek['id_merek'].'"
                    '.$select.'>'.$data_merek['nama_merek'].'</option>';
                    }
                    ?>
                </select>
            <br>
            <input type="submit" name="simpan" value= "Ubah product" class="btn btn-primary">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>