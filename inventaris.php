<?php
    include "koneksi.php";
    session_start();
    if(empty($_SESSION['username'])){
        header("location:index.php?pesan=belum_login");
    }
    include "crud.php";
    $urut=1;
    $totalinventaris=0;
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
        <a class="btn btn-primary btn-sm-4 mt-3 mb-3" href="tambah.php"><i class="fas fa-plus"></i> Tambah</a>
        <table class="table">
            <thead class="table-dark">
                <th><center>No</center></th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Tanggal Datang</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Harga Satuan</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </thead>
            <?php
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $query = mysqli_query($koneksi, "SELECT * FROM inventaris WHERE kategori like'%".$cari."%' OR kode_barang like '%".$cari."%'");
            }else{
            $query = mysqli_query($koneksi,"SELECT * FROM inventaris");
            }
            while($data = mysqli_fetch_array($query)) {
            ?>
            <tbody>
                <tr>
                    <td><center><?php echo $urut?>.</center></td>
                    <td><?php echo "$data[kode_barang]"?></td>
                    <td><?php echo "$data[nama_barang]"?></td>
                    <td><?php echo "$data[jumlah]"?></td>
                    <td><?php echo "$data[satuan]"?></td>
                    <td> <?php echo date('d-m-Y', strtotime($data ['tgl_datang'])); ?></td>
                    <td><?php echo "$data[kategori]"?></td>
                    <td><?php echo "$data[status_barang]"?></td>
                    <td><?php echo 'Rp. ' . number_format($data['harga'], 0, ".", "."); ?>,00</td>
                    <td><?php $totalharga = $data['harga'] * $data['jumlah']; echo 'Rp. ' . number_format($totalharga, 0, ".", "."); ?>,00</td>
                    <td>
                        <a href="ubah.php?ubah=<?php echo "$data[kode_barang]"?>" class="btn btn-success btn-sm"><i class="far fa-edit"></i></a>
                        <a href="hapus.php?hapus=<?php echo "$data[kode_barang]"?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                    </td>
                    <?php
                    $urut++;
                    $totalinventaris = $totalinventaris+$totalharga;
                    ?>
                </tr>
            </tbody>
            <?php } ?>
        </table>
        <?php function rupiah($angka){
	    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	    return $hasil_rupiah;
        }
        ?>
        <h1><center>Total Inventaris = <?php echo rupiah($totalinventaris);?></center></h1> 
    </div>

    <div class="card-footer text-white">
    Inventaris 2016
    </div>
</body>