<?php
    include 'fungsi.php';
    $id = $_POST['id'];
    $biodata = query_single("SELECT * FROM biodata WHERE id='$id'");

    session_start();

  // echo $_SESSION['user'];

  if(isset($_GET['logout'])){
    unset($_SESSION['user']);
    header('Location: login.php');
  }else if(!isset($_SESSION['user'])){
    header('Location: login.php');
  } 
 
    if(isset($_POST["submit"])){


        if(edit_data($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Diedit');
                    document.location.href = 'tampil.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal diedit');
                    document.location.href = 'tampil.php';
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
    <title>Dashbord Admin</title>

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
                <h2><a href="index.php">Dashbord</a></h2><br>
                <div class="menu">
                    <a href="tambahdata.php">Input Guestbook</a><br></br>
                    <a href="tampil.php">Lihat Guestbook</a><br></br>
                    <a href="logout.php">Log Out</a>
                </div>
            </div>
            <div class="col-9 dashbordKanan mt-5">
                <form action="" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $biodata['id'];?>">

                    <div class="mb-3">
                        <label for="nama" class="form-label">nama</label>
                        <input id="nama" type="text" name="nama" class="form-control" placeholder="masukkan nama"
                            value="<?= $biodata['nama'];?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">nim</label>
                        <input id="nim" type="text" name="nim" class="form-control" placeholder="masukkan nim"
                            value="<?= $biodata['nim'];?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <input id="alamat" type="text" name="alamat" class="form-control" placeholder="masukkan alamat"
                            value="<?= $biodata['alamat'];?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="jeniskelamin" class="form-label">jeniskelamin</label>
                        <input id="jeniskelamin" type="text" name="jeniskelamin" class="form-control"
                            placeholder="masukkan jeniskelamin" value="<?= $biodata['jeniskelamin'];?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="agama" class="form-label">agama</label>
                        <input id="agama" type="text" name="agama" class="form-control" placeholder="masukkan agama"
                            value="<?= $biodata['agama'];?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="sd" class="form-label">sd</label>
                        <input id="sd" type="text" name="sd" class="form-control" placeholder="masukkan sd"
                            value="<?= $biodata['sd'];?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="smp" class="form-label">smp</label>
                        <input id="smp" type="text" name="smp" class="form-control" placeholder="masukkan smp"
                            value="<?= $biodata['smp'];?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="sma" class="form-label">sma</label>
                        <input id="sma" type="text" name="sma" class="form-control" placeholder="masukkan sma"
                            value="<?= $biodata['sma'];?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
                        <input id="ttl" type="text" name="ttl" class="form-control" placeholder="Makassar, 25 april 2000"
                            value="<?= $biodata['ttl'];?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="hobi" class="form-label">hobi</label>
                        <input id="hobi" type="text" name="hobi" class="form-control" placeholder="masukkan hobi"
                            value="<?= $biodata['hobi'];?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="skill" class="form-label">skill</label>
                        <input id="skill" type="text" name="skill" class="form-control" placeholder="masukkan skill"
                            value="<?= $biodata['skill'];?>" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="foto" class="form-label ">foto</label>
                        <input type="file" name="foto" class="form-control" id="foto">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary mb-2">Kirim</button>
                    <div>
                        <a name="kembali" class="btn btn-danger" href="tampil.php">Kembali</a>
                    </div>


                </form>
            </div>
        </div>





        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>