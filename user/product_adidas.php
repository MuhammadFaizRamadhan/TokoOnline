<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas Product</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
</head>
<body style="background-color:powderblue;">
    <?php 
        include "navbar2.php";
    ?>
    <br>
    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1>Adidas Product</h1>
            <p class="lead text-muted">Grab it Fast !!!</p>
            <form method="POST" action="product.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
        </div>
    </section>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php 
        include "koneksi.php";
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            $query_product = mysqli_query($koneksi, "select * from product join merek on merek.id_merek=product.id_merek where product.id_product = '%$cari%' or product.nama_product like '%$cari%' or merek.nama_merek like 'Adidas'");
        }
        else{
            $query_product = mysqli_query($koneksi, "select * from product join merek on merek.id_merek=product.id_merek where merek.nama_merek like 'Adidas' ");
        }
        while($data_product=mysqli_fetch_array($query_product)){
            ?>
            <!-- <div class="col-md-3">
                <div class="card" >
                <img src="admin/foto_product/<?php echo $data_product['foto_product']; ?>" class="card-img-top">
                
                <div class="card-body">
                    <h5 class="card-title"><?=$data_product['nama_product']?></h5>
                    <p class="card-text"><?=substr($data_product['deskripsi'], 0,20)?></p>
                    <a href="pinjam_product.php?id_product=<?=$data_product['id_product']?>" class="btn btn-primary">Pinjam</a>
                </div>
                </div>
            </div> -->
            <div class="col">
            <div class="card shadow-sm">
                <img src="../admin/foto_product/<?=$data_product['foto_product']?>" class="bd-placeholder-img card-img-top" width="100px" height="400px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"/></img>

                <div class="card-body">
                <h5 class="card-title"><?=$data_product['nama_product']?></h5>
                <p class="card-text"> Rp. <?=substr($data_product['harga'], 0,20)?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="detail_product.php?id_product=<?=$data_product['id_product']?>" class="btn btn-dark ">add to cart</a>
                    </div>
                    <small class="text-muted"><?=$data_product['nama_merek']?></small>
                </div>
                </div>
            </div>
            </div>
            <?php
        }
        ?>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>