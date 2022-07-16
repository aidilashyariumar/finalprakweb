<?php
session_start();

// echo $_SESSION['user'];

if(isset($_GET['logout'])){
  unset($_SESSION['user']);
  header('Location: login.php');
}else if(!isset($_SESSION['user'])){
  header('Location: login.php');
} 

    include 'fungsi.php';

    if(isset($_POST["submit"])){
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Ditambah');
                    document.location.href = 'tampil.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal ditambah');
                    document.location.href = 'input.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord Input Data</title>

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

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
                <div class="main-content">
                    <header>
                        <h2>
                            Input Data Biodata
                        </h2>
                    </header>

                    <div class="isi">
                        <div class="col-md-6">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input id="nama" type="text" name="nama" class="form-control"
                                        placeholder="masukkan nama anda">
                                </div>
                                <div class="mb-3">
                                    <label for="nim" class="form-label">Nim</label>
                                    <input id="nim" type="text" name="nim" class="form-control"
                                        placeholder="masukkan nim anda">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input id="alamat" type="text" name="alamat" class="form-control"
                                        placeholder="masukkan alamat anda">
                                </div>
                                <div class="mb-3">
                                    <label for="jeniskelamin" class="form-label">Jenis kelamin</label>
                                    <br>
                                    <select name="jeniskelamin">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="agama" class="form-label">Agama</label>
                                    <br>
                                    <select name="agama">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="sd" class="form-label">SEKOLAH DASAR</label>
                                    <input id="sd" type="text" name="sd" class="form-control"
                                        placeholder="masukkan sd anda">
                                </div>
                                <div class="mb-3">
                                    <label for="smp" class="form-label">SEKOLAH MENENGAH PERTAMA</label>
                                    <input id="smp" type="text" name="smp" class="form-control"
                                        placeholder="masukkan smp anda">
                                </div>
                                <div class="mb-3">
                                    <label for="sma" class="form-label">SEKOLAH MENENGAH KEATAS</label>
                                    <input id="sma" type="text" name="sma" class="form-control"
                                        placeholder="masukkan sma anda">
                                </div>
                                <div class="mb-3">
                                    <label for="ttl" class="form-label">TEMPAT, TANGGAL LAHIR</label>
                                    <input id="ttl" type="text" name="ttl" class="form-control"
                                        placeholder="Makassar , 25 April 2000">
                                </div>
                                <div class="mb-3">
                                    <label for="hobi" class="form-label">hobi</label>
                                    <input id="hobi" type="text" name="hobi" class="form-control"
                                        placeholder="masukkan hobi anda">
                                </div>
                                <div class="mb-3">
                                    <label for="skill" class="form-label">skill</label>
                                    <input id="skill" type="text" name="skill" class="form-control"
                                        placeholder="masukkan skill anda">
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">foto</label>
                                    <input class="form-control" type="file" name="foto" id="foto">
                                </div>
                                <button type="submit" name="submit" class="btn btn-warning mb-5">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>