<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail product</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
body {
  background-color: black;
  
}
</style> 
</head>
<body style="background-color:powderblue;">
    <?php
        include "navbar2.php";
        include "koneksi.php";
        $query_detail_product = mysqli_query($koneksi, "SELECT * FROM product where id_product = '".$_GET['id_product']."'");
        $data_product = mysqli_fetch_array($query_detail_product);
    ?>
    <main class="container">
    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Detail product</h1>
        </div>
    </section>

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="../admin/foto_product/<?=$data_product['foto_product']?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <form action="insert_cart.php?" method="POST">
                <input type="hidden" name="id_product" value="<?=$data_product['id_product']?>">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <td>Name product</td>
                            <td><?=$data_product['nama_product']?></td>
                        </tr>
                        <tr>
                            <td>harga</td>
                            <td>Rp. <?=$data_product['harga']?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?=$data_product['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td>Jumlah beli</td>
                            <td><input type="number" name="qty" value="1"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" class="btn btn-dark" value="add to cart"></td>
                        </tr>
                    </thead>
                </table>
            </form>
            </div>
            </div>
        </div>
    </div>

    </main>
    
</body>
</html>