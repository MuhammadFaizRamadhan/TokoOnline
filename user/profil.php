
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="profil2.css">
</head>
<body style="background-color:powderblue;">
    <?php
    include "navbar2.php";
    ?>
    <br>
<form action= "proses_ubah_profil.php" method="post" enctype="multipart/form-data">
<div class="container rounded bg-white mt-5 mb-5" >
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="fotoLogin/iconlogin.png" width="90"><span class="font-weight-bold">Hello, <?=$_SESSION['nama']?></span></div>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Perfect Your Profile</h4>
                </div>
                <!-- <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label></div>
                    <div class="col-md-6"><?=$_SESSION['nama']?></div>
                    <div class="col-md-6"><label class="labels">Username</label></div>
                    <div class="col-md-6"><?=$_SESSION['username']?></div>
                </div> -->
                <div class="row mt-3">
                
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" name="nama" class="form-control" placeholder="Your Name" value="<?=$_SESSION['nama']?>"></div>
                    <div class="col-md-12"><label class="labels">Username</label><input type="text" name="username" class="form-control" placeholder="Your Username" value="<?=$_SESSION['username']?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" name="alamat" class="form-control" placeholder="Address" value="<?=$_SESSION['alamat']?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Call</label><input type="text" name="telp" class="form-control" placeholder="country" value="<?=$_SESSION['telp']?>"></div>
                    <div class="col-md-6"><label class="labels"></label><input type="hidden" name="id_pelanggan" class="form-control" placeholder="Your Name" value="<?=$_SESSION['id_pelanggan']?>"></div>
                    
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" href="proses_ubah_profil.php">Save Profile</button></div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>