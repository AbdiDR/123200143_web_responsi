<?php
    session_start();
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql3   = "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'";
    $query3 = mysqli_query($koneksi,$sql3);
    $cek    = mysqli_num_rows($query3);
    if($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location:home.php");
    } else {
        header("location:index.php?pesan=error");
    }
?>