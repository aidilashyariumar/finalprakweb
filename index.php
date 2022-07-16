<?php 
include 'fungsi.php';
    $biodata = query("SELECT * FROM biodata");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiodataTa'</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<style>
    .navbar {
    box-shadow: 1px 1px 3px;
  }
</style>
<body>

<nav class="navbar navbar-expand-lg  fixed-top  " style="background-color:white ;">
    <div class="container">
      <a class="navbar-brand" href="#"><h2 class="fw-bold">Bio</h2></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fw-bold">
          <li class="nav-item me-3">
            <a class="nav-link" href="index.php">Beranda</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="index.php#bio">Biodata</a>
          </li>
         
         
        </ul>
      </div>
    </div>
  </nav>

  <section class="container d-flex justify-content-between align-items-center " style="margin-top: 200px;">
    <div class="container">
      <div class="row  d-flex justify-content-between align-items-center " style="">
        <div class="col-12 col-lg-6 col-md-6">
          <div class="div">
            <h1 class="fw-bold">Selamat Datang!</h1>
            <p>Silahkan Scroll Kebawah Untuk Melihat  <br>
              Biodata orang-orang, bahkan biodata anda<br>
              ada diwebsite kami.</p>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-md-6 ">
          <div class="div">
            <img src="./img/Gambar.png" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="my-5">

    <div class="container ">
      <h2 class="fw-bold d-flex justify-content-center my-5">Biodata</h2>
      

        <div class="row d-flex justify-content-evenly" id="bio">
          <?php foreach ($biodata as $bio) : ?>
            <div class="col-12 col-lg-4 col-md-4 mt-2">
              <div class="card  h-100" >
                <img src="images/<?= $bio['foto']; ?>" class="card-img-top" alt="..."  style="height:250px ;">
                <div class="card-body">
                  <h5 class="card-title"><?= $bio['nama']; ?></h5>
                  <p class="card-text"><?= $bio['nim'];?></p>
                  <a href="spesifik.php?id=<?= $bio['id']; ?>" class="btn btn-danger">Lebih Lengkap</a> 
                </div>
              </div>
            </div>
          
        <?php endforeach; ?>
      </div>
    </div>
    <div class="container mt-5">

      <!-- <a class="d-flex justify-content-center btn btn-danger" href="semuadata.php">
        Lihat semua
      </a> -->
    </div>
  </section>

  <?php 
    include 'footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>