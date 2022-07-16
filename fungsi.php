<?php

    $conn= mysqli_connect('localhost','root','','webprak');
    if(mysqli_connect_errno()){
        echo"Gagal :" . mysqli_connect_error();
    }

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
    function query_single($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        return $data = mysqli_fetch_assoc($result);
    }
   


    //registrasi
    function regis($data){
        global $conn;

        $username = stripslashes($data["username"]);
        $password = $data["password"];
        
        //cek username sudah ada atau belum
        $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");

        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('Username sudah terdaftar')
                </script>
            ";

            return false;
        }


        //tambahkan user password ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username','$password')");

        return mysqli_affected_rows($conn);

    }

    //tambah data
    function tambah($data){
    global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $jeniskelamin = htmlspecialchars($data["jeniskelamin"]);
        $agama = htmlspecialchars($data["agama"]);
        $sd = htmlspecialchars($data["sd"]);
        $smp = htmlspecialchars($data["smp"]);
        $sma = htmlspecialchars($data["sma"]);
        $ttl = htmlspecialchars($data["ttl"]);
        $hobi = htmlspecialchars($data["hobi"]);
        $skill = htmlspecialchars($data["skill"]);
        $foto = unggah($_FILES);


        mysqli_query($conn, "INSERT INTO biodata VALUES ('','$nama','$nim', '$alamat', '$jeniskelamin', '$agama', '$sd', '$smp', '$sma', '$ttl', '$hobi','$skill', '$foto')");

        return mysqli_affected_rows($conn);
    }

    function unggah($files){
        
        $nama_gambar = $files["foto"]["name"];
        $error = $files["foto"]["error"];
        $tmp = $files["foto"]["tmp_name"];
        $format = explode(".",$nama_gambar);
        $format = strtolower(end($format));

        if($error === 4){
            return false;
        }

        $nama_gambar = date("ymdisa").".".$format;
        // var_dump($tmp);var_dump('images/'.$nama_gambar);die();
        move_uploaded_file($tmp,"images/".$nama_gambar);

        return $nama_gambar;
        
    }

    function uploadimg(){

        $nameFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto'] ['tmp_name'];

        //cek apakah tidak ada foto yang diupload
        if ($error === 4){
            echo "<script>
                    alert('pilih foto terlebih dahulu');
                    </script>";

                    return false;
        }

        //pastikan yang diupload adalah foto

        $ekstensiGambarValid = ['jpeg','jpg','png'];
        $ekstensiGambar = explode('.',$nameFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
            echo"<script>
                    alert('yang diupload bukan gambar !');
                </script>";

            return false;
        }

        //cek jika ukuran terlalu besar
        //if ($ukuranFile > 2500000){
            //echo"<script>
                //alert('ukuran gambar terlalu besar);
                //</script>";

          //  return false;
        //}

        //lolos pengecekan , gambar siap diupload
        //ubah nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        move_uploaded_file($tmpName, 'images/' . $namaFileBaru);

        return $namaFileBaru;
    }


    //edit data
    function edit_data($post){
        global $conn;
        $id = $post["id"];
        $nama = $post["nama"];
        $nim = $post["nim"];
        $alamat = $post["alamat"];
        $jeniskelamin = $post["jeniskelamin"];
        $agama = $post["agama"];
        $sd = $post["sd"];
        $smp = $post["smp"];
        $sma = $post["sma"];
        $ttl = $post["ttl"];
        $hobi = $post["hobi"];
        $skill = $post["skill"];
       
        $fotolama = $post["fotolama"];

        if($_FILES['foto']['error'] === 4){
            $foto = $fotolama;
 
        }else{
            $foto = uploadimg();
        }
        

        $query = "UPDATE biodata SET  nama='$nama', nim='$nim', alamat='$alamat', jeniskelamin='$jeniskelamin', agama='$agama', sd='$sd', smp='$smp', sma='$sma', ttl='$ttl', hobi='$hobi', skill='$skill', foto='$foto' WHERE id='$id'";

        mysqli_query($conn, $query);

        if(mysqli_affected_rows($conn) > 0){
            header("location:tampil.php?sukses-edit=3");
        }

        else{
            header("location:tampil.php?sukses-edit=0");
        }
    }

    
?>