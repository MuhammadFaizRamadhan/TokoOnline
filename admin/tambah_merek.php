<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Brand</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php   
    include "navbar.php";
    ?>

    <div class="container">
    <br>
    <h3 >Tambah Merek</h3>
    <br>
    <form action="proses_tambah_merek.php" method="post" enctype="multipart/form-data">
    <h5>Nama Merek :</h5>
        <input type="text" name="nama_merek" value="" class="form-control" placeholder="Masukkan Nama merek">
        <br>
        <input type="submit" name="simpan" value="Tambah merek" class="btn btn-primary">
        <br>
    </form>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>