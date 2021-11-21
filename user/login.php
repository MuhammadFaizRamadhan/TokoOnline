<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login TEA's</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet_login.css">
</head>
<body>
    <div class="container-fluid ps-md-0">
    <div class="row g-0">
        
            <div id="carouselExampleSlidesOnly" class="carousel slide d-none d-md-flex col-md-4 col-lg-6" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox" >
                <div class="carousel-item active" >
                <img src="fotoLogin/Jordan Flight Heritage.JPG" width="680" height="655">
                </div>
                <div class="carousel-item">
                <img src="fotoLogin/Jordan Flight Heritage2.JPG" width="680" height="655">
                </div>
                <div class="carousel-item">
                <img src="fotoLogin/_MG_1144.JPG" width="680" height="655">
                </div>
            </div>
            </div>
        <!-- <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div> -->
        <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
            <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4 text-center">YOUR ACCOUNT FOR EVERYTHING TEA's</h3>

                <!-- Sign In Form -->
                <form method="POST" action="proses_login.php">
                    <div class="form-floating mb-3">
                        <input  name="username" type="text" class="form-control" id="floatingInput" placeholder="Username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="d-grid">
                    <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Sign in</button>
                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>
                    <div class="d-grid">
                    <a class="btn btn-dark text-uppercase fw-bold mb-2" href="register.php" >Join Us</a>
                    </div>

                    </div>

                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>