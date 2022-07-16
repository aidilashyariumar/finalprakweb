<?php
    include 'fungsi.php';

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM biodata WHERE id=$id");

    header("Location:tampil.php");
?>