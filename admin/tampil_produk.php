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
<br></br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>DATA product</h1>
                <form method="POST" action="tampil_produk.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id Product</th>
                    <th scope="col">Nama Product</th>
                    <th scope="col">Nama Merek</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Foto Product</th>
                    <th scope="col">Arep Nyapo</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "koneksi.php";
                    if (isset($_POST['cari'])) {
                        $cari = $_POST['cari'];
                        $query_product = mysqli_query($koneksi, "select * from product join merek on merek.id_merek=product.id_merek where id_product = '$cari' or nama_product like '%$cari%' or deskripsi like '%$cari%'");
                    }
                    else{
                        $query_product = mysqli_query($koneksi, "select * from product join merek on merek.id_merek=product.id_merek");
                    }
                    while($data_product = mysqli_fetch_array($query_product)){
                ?>
                    <tr>
                        <td><?=$data_product['id_product']?></td>
                        <td><?=$data_product['nama_product']?></td>
                        <td><?=$data_product["nama_merek"]?></td>
                        <td><?=$data_product['deskripsi']?></td>
                        <td><?=$data_product['harga']?></td>
                        <td><img src="foto_product/<?php echo $data_product['foto_product']; ?>" style="width: 120px;"></td>
                        <td>
                            <a href="ubah_produk.php?id_product=<?=$data_product['id_product']?>" class="btn btn-success">Edit</a>
                            <a href="hapus_produk.php?id_product=<?=$data_product['id_product']?>" class="btn btn-danger"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
        </tbody>
    </table>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>