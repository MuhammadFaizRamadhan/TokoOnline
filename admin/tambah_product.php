<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php
    include "navbar.php";
    ?>
    <div class="container">
    <br>
    <h3 >Tambah Product</h3>
    <br>
    <form action="proses_tambah_product.php" method="post" enctype="multipart/form-data">
    <h5>Nama Product :</h5>
        <input type="text" name="nama_product" value="" class="form-control" placeholder="Masukkan Nama Product">
        <br>
    <h5>Deskripsi :</h5>
        <input type="text" name="deskripsi" value="" class="form-control" placeholder="Masukkan Deskripsi">
        <br>
    <h5>Harga :</h5>
        <input type="text" name="harga" value="" class="form-control" placeholder="Masukkan Harga">
        <br>
    <h5>Foto Product :</h5>
        <input type="file" name="foto_product" >
        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg </p>
        <br>
        
        <h5>merek :</h5>
        <select name="id_merek" class="form-control">;
            <option>Pilih merek</option>;
            <?php
            include "koneksi.php";
            $qry_merek=mysqli_query($koneksi,"select * from merek");
            while($data_merek=mysqli_fetch_array($qry_merek)){
                echo '<option value="'.$data_merek['id_merek'].'">'.$data_merek['nama_merek'].'</option>';
            }

            ?>
        
        </select>
        <br>
        <input type="submit" name="simpan" value="Tambah Product" class="btn btn-primary">
        <br>
    </form>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>