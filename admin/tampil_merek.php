<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Merek</title>
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
                    <h1>Data Merek</h1>
                    <form method="POST" action="tampil_merek.php" class="d-flex">
                        <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id Merek</th>
                        <th scope="col">Merek</th>
                        <th scope="col">Arep Nyapo</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include "koneksi.php";
                        if (isset($_POST['cari'])) {
                            $cari = $_POST['cari'];
                            $query_merek = mysqli_query($koneksi, "select * from merek where id_merek = '$cari' or nama_merek like '%$cari%' ");
                        }
                        else{
                            $query_merek = mysqli_query($koneksi, "select * from merek");
                        }
                        while($data_merek = mysqli_fetch_array($query_merek)){
                    ?>
                        <tr>
                            <td><?=$data_merek['id_merek']?></td>
                            <td><?=$data_merek['nama_merek']?></td>
                            <td>
                                <a href="ubah_merek.php?id_merek=<?=$data_merek['id_merek']?>" class="btn btn-success">Edit</a>
                                <a href="hapus_merek.php?id_merek=<?=$data_merek['id_merek']?>" class="btn btn-danger"
                                onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
                <a href="tambah_merek.php" type="button" class="btn btn-primary">Tambah merek</a>
                </div>
            </div>
        </div>
            </tbody>
        </table>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>