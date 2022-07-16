<?php
  session_start();

  // echo $_SESSION['user'];

  if(isset($_GET['logout'])){
    unset($_SESSION['user']);
    header('Location: login.php');
  }else if(!isset($_SESSION['user'])){
    header('Location: login.php');
  } 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title>Halaman Utama</title>
  </head>
  <body>
   
    <section id="penjualan">
        <div class="row">
            <div class="col-3 dashbordKiri">
                <h2><a href="admin.php">Dashbord</a></h2><br>
                <div class="menu">
                  <a href="tambahdata.php"><i class="bi bi-people"></i> Input Biodata</a><br></br>
                  <a href="tampil.php"><i class="bi bi-eye"></i> Lihat Biodata</a><br></br>
                  <a href="logout.php"><i class="bi bi-box-arrow-right"></i> Log Out</a>
                </div>
            </div>
            <div class="col-9 dashbordKanan text-center">
              <div>
                <h1 class="text-center pt-5 pb-3">Selamat datang BioTa'</h1>
                <h3 class="pb-5  fw-bold "><?php  echo date('l,d / M / y'); echo "<br/>";?></h3>
              </div>
            </div>
        </div>
    </section>

   


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>