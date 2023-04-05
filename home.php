<?php
    include "koneksi.php";
    session_start();
    if(empty($_SESSION['username'])){
        header("location:index.php?pesan=belum_login");
    }
    include "crud.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Inventaris</title>
</head>

<body>
    <div class="header">
        <h2 >DAFTAR INVENTARIS BARANG <br> KANTOR SERBA ADA</h2>
    </div>

    <?php include("header.php")?>

    <div class="container">
        <div class="text">
            <br><br><br>
            <h1><center>Selamat Datang</center></h1>
            <h1><center>
            <?php
            $username=$_SESSION['username'];
            $query=mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$username'");
            while($data=mysqli_fetch_array($query))
            {echo $data['nama_lengkap'];}
            ?>
            </center></h1>
            <h1><center>^_^</center></h1>
        </div>
    </div>
    <div class="card-footer text-white">
    Inventaris 2016
    </div>
</body>