<?php
    session_start();
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Navbar  -->
<link rel="stylesheet" href="navbar2.css">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" >
        <img src="fotoLogin/tea_logo.png" alt="" width="60" height="30">
        </a>
        <?php if(isset($_SESSION['status_login'])):?>
        <li class="nav-item">
              <a class="nav-link text-white" >Hello, <?=$_SESSION['username']?></a>
              </li>
              <?php endif ?>
        <li class="nav-item">
              <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="product.php">Product</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link text-white" href="product_adidas.php">Adidas Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="product_nike.php">Nike Product</a>
            </li> -->
            
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav ">
            
            
            <?php if(isset($_SESSION['status_login'])):?>
            <li class="nav-item">
              <a class="nav-link text-white" href="profil.php"><i class="far fa-user-circle"></i></a>
            </li>
              
              <a class="navbar-brand" href="cart.php">
              <img src="fotoLogin/carticon.png" alt="" width="34" height="30">
            </a>
                <a class="navbar-brand" href="profil.php">
              <img src="fotoLogin/iconlogin.png" alt="" width="34" height="30">
            </a>
            <li class="nav-item ">
                  <a class="nav-link text-white" href="logout.php">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="profil.php"><i class="far fa-user-circle"></i></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="login.php">Login</a>
                </li>
                
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>
    <script src="js/navbar.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>