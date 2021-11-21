<link rel="stylesheet" href="navbar.css">


<nav class="navbar navbar-dark bg-dark shadow-sm navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand">TEA's</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropbtn" href="#" id="navbarDropdown" role="button"  aria-expanded="false">
            Data
          </a>
          <ul class="dropdown-content" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tampil_pelanggan.php">Data Pelanggan</a></li>
            <li><a class="dropdown-item" href="tampil_produk.php">Data Produk</a></li>
            <li><a class="dropdown-item" href="tampil_merek.php">Data Merek</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropbtn" href="#" id="navbarDropdown" role="button"  aria-expanded="false">
            Tambah Data
          </a>
          <ul class="dropdown-content" aria-labelledby="navbarDropdown">
            
            <li><a class="dropdown-item" href="tambah_product.php">Tambah Product</a></li>
            <li><a class="dropdown-item" href="tambah_merek.php">Tambah Merek</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <a class="nav-link" href="logout.php">Logout</a>
      </ul>
    </div>
  </div>
</nav>