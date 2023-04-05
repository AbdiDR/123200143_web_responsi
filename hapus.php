<?php
    include "koneksi.php";
    session_start();
    if(empty($_SESSION['username'])){
        header("location:index.php?pesan=belum_login");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/24023efca4.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Inventaris</title>
</head>
<body>
<div class="header">
        <h2 >DAFTAR INVENTARIS BARANG <br> KANTOR SERBA ADA</h2>
    </div>

    <?php include("header.php") ?>


    <div class="container">
        <div class="sub">
            <h5>Hapus Data Inventaris</h5>
        </div>
        <?php
            if(isset($_GET['hapus'])){
            $kode_barang=$_GET['hapus'];
            $query=mysqli_query($koneksi, "SELECT * FROM inventaris WHERE kode_barang='$kode_barang'");
            while($data=mysqli_fetch_array($query)){
        ?>
            <p>Yakin ingin Menghapus <a href="inventaris.php?cari=<?php echo "$data[kode_barang]"?>"><?php echo $data['nama_barang'];?></a> ?</p>
            <a href="crud.php?hapus=<?php echo $data['kode_barang'];?>" class="btn btn-danger" name="hapus"><i class="far fa-trash-alt"></i> Hapus</a>
            <a  href="inventaris.php" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Batal</a>
            <?php }
            }
            ?>
    </div>

</body>