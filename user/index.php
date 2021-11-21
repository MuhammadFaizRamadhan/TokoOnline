<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEA's</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
    <style>
      .carousel-item {
        height: 100vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
    </style>
</head>
<body>
    <?php
    include "navbar2.php";
    ?>
    <!-- Banner Image  -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" sytle="height: 554px;">
        <video src="fotoLogin/Sequence 02.mp4" class="video-fluid" type="video/mp4" autoplay loop muted>
        </video>
        <div class="carousel-caption font-weight-bold text-primary">
          <h2>Nike Collection</h2>
          <a type="button" class="btn btn-primary btn-lg mt-3 text-white" href="product_nike.php">Check Now </a>
      </div>
      </div>
      <div class="carousel-item" sytle="height: 554px;">
        <video src="fotoLogin/Sequence 01.mp4" class="video-fluid" type="video/mp4" autoplay loop muted>
        </video>
        <div class="carousel-caption font-weight-bold text-primary">
          <h2>Adidas Collection</h2>
          <a type="button" class="btn btn-primary btn-lg mt-3 text-white" href="product_adidas.php">Check Now </a>
          </div>
      </div>
      <!-- <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div> -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>