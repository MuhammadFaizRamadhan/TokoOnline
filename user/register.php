<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join TEA's</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet_register2.css">
</head>
<body>
<section class="vh-100" style="background-image: url('fotoLogin/background_register.jpg'); background-size: cover;" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
                <br>
                <h3 class="fw-normal mb-3 pb-3" align="center" style="letter-spacing: 4px;">BECOME A TEA's MEMBER</h3>
                
              <img src="fotoLogin/register.png"  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <form method="POST" action="proses_register.php">
                <div class="form-floating mb-3">
                    <input name="nama" type="text" class="form-control" id="floatingInput" placeholder="Name">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Username">
                <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="alamat" type="text" class="form-control" id="floatingInput" placeholder="Alamat">
                    <label for="floatingInput">Alamat</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="telp" type="text" class="form-control" id="floatingInput" placeholder="telp">
                    <label for="floatingInput">telp</label>
                </div>
                <div class="d-grid">
                    <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Join</button>
                </div>
                <p class="small text" style="color: #393f81;">have an account? <a href="login.php" style="color: #393f81;">Login</a></p>
                  <!-- <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>
                    <div class="d-grid">
                    <a class="btn btn-dark text-uppercase fw-bold mb-2" href="login.php" >Login</a>
                    </div> -->
                  <!-- <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                  </div>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!" style="color: #393f81;">Register here</a></p> -->
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>