
<?php 
    include 'fungsi.php';

    $id=$_GET['id'];

    $biodata = query("SELECT * FROM biodata WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    .img{
        background-image:url(./images/<?= $biodata['foto'] ?>);
        width: 30%;
        background-color: green;
        height: 495px;
       
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
    }
    .isi{
        margin-top: -180px ;
    }
    .data{
        /* margin: 25px 0 0 10px; */
        margin: 0 -20px 0 0;
        padding: 10px 50px 10px 50px;
        border-radius: 20px;
    }
</style>
<body>
    <div class="bg-danger  text-light" style="padding:30px 0 200px 50px;">
        <div class="text" style="margin-top:20px;">
            <h1 class="fw-bold"><?= $biodata['nama']; ?></h1>
            <h5><?= $biodata['skill']; ?></h5>
        </div>
    </div>
    <div class="isi d-flex justify-content-center " >
        <div class="container d-flex justify-content-center align-items-start " style=" width:80%; border-radius:20px;  "  >
            <div class="data bg-light" >
                
                    <h3 class="">Saya, <span class="fw-bold "style="color:red ;"><?= $biodata['nama']; ?></span></h3>
                    <h5><?= $biodata['skill']; ?></h5>
                    <hr>
                    <table   cellpadding="5" cellspacing="">
                        <tr>
                            <td>Nama</td>
                            <td><?= $biodata['nama']; ?></td>
                        </tr>
                        <tr>
                            <td>Nim</td>
                            <td><?= $biodata['nim']; ?></td>
                        </tr>
                        <tr>
                            <td>TTL</td>
                            <td><?= $biodata['ttl']; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $biodata['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><?= $biodata['jeniskelamin']; ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td><?= $biodata['agama']; ?></td>
                        </tr>
                        <tr>
                            <td>Hobi</td>
                            <td><?= $biodata['hobi']; ?></td>
                        </tr>
                        <tr>
                            <td>SD</td>
                            <td><?= $biodata['sd']; ?></td>
                        </tr>
                        <tr>
                            <td>SMP</td>
                            <td><?= $biodata['smp']; ?></td>
                        </tr>
                        <tr>
                            <td>SMK/SMA</td>
                            <td><?= $biodata['sma']; ?></td>
                        </tr>
                        <tr>
                            <td>Skill</td>
                            <td><?= $biodata['skill']; ?></td>
                        </tr>
                    </table>
                    <div class="d-flex justify-content-center">
                        
                        </div>
                    </div>
                    
                    <div class="img">
                    
                    </div>
                </div>
            </div>

<?php 
    include 'footer.php';
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>