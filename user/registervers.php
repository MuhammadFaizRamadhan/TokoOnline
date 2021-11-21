<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join With TEA's</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet_register.css">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">BECOME A TEA MEMBER</h5>
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
                    <button class="btn btn-dark btn-login text-uppercase fw-bold" type="submit">Join</button>
                </div>
                <!-- Divider Text -->
                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>
                    <div class="d-grid">
                    <a class="btn btn-primary text-uppercase fw-bold mb-2" href="login.php" >Login</a>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>