<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark shadow-sm navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TEA's</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="tampil_pelanggan.php">Data Pelanggan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_produk.php">Data Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tambah_produk.php">Tambah Produk</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['status_login'])):?>
                <li class="nav-item">
                    <a class="nav-link" href="profil.php"><i class="far fa-user-circle"></i></a>
                </li>
                <li class="nav-item mt-1">
                <a class="nav-link" href="logout.php">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="profil.php"><i class="far fa-user-circle"></i></a>
                </li>
                <li class="nav-item mt-1">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            <?php endif ?>
        
      </ul>
    </div>
  </div>
</nav>
</body>
</html>