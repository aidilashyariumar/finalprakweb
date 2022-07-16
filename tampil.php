<?php

    include 'fungsi.php';

    $biodata = query("SELECT * FROM biodata");

    session_start();

    // echo $_SESSION['user'];
  
    if(isset($_GET['logout'])){
      unset($_SESSION['user']);
      header('Location: login.php');
    }else if(!isset($_SESSION['user'])){
      header('Location: login.php');
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data</title>
    <link rel="stylesheet" href="index.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
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
    
        <div class="col-9 dashbordKanan">
            <header>
                <h2>
                    Tampilan Data Biodata
                </h2>
            </header>
            <table class="table table-bordered table-striped mt-5">
            <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Nim</th>
          <th scope="col">Alamat</th>
          <th scope="col">Jeniskelamin</th>
          <th scope="col">Agama</th>
          <th scope="col">SD</th>
          <th scope="col">SMP</th>
          <th scope="col">SMA</th>
          <th scope="col">TTL</th>
          <th scope="col">Hobi</th>
          <th scope="col">Foto</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
            </div>
<section
            <?php 
            $i = 1;
            foreach($biodata as $bio):
            ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $bio['nama']; ?></td>
                <td><?= $bio['nim']; ?></td>
                <td><?= $bio['alamat']; ?></td>
                <td><?= $bio['jeniskelamin']; ?></td>
                <td><?= $bio['agama']; ?></td>
                <td><?= $bio['sd']; ?></td>
                <td><?= $bio['smp']; ?></td>
                <td><?= $bio['sma']; ?></td>
                <td><?= $bio['ttl']; ?></td>
                <td><?= $bio['hobi']; ?></td>
                <td><img src="images/<?= $bio['foto']; ?>" alt="" width="200px"></td>
                <td>
                    <form action=" edit.php" method="post">
                        <input type="hidden" name="id" value="<?= $bio['id']; ?>">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </form>
                    <form action="hapus.php?id=<?= $bio['id']; ?>" method="post">
                        <input type="hidden" name="id" value="<?= $bio['id']; ?>">
                        <button type="submit" name="hapus" class="btn btn-danger mb-3">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php
            $i++;
            endforeach;
        ?>
        </table>
    </div>  
    </section>  

</body>

</html>