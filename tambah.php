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
            <h5>Tambah Data Inventaris</h5>
        </div>
        <form method="POST" action="crud.php">
            <div class="form-group row mb-2 mt-2">
                <label class="col-sm-2 col-form-label">Kode Barang</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="kode_barang" placeholder="Kode Barang">
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="satuan" placeholder="Satuan">
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="col-sm-2 col-form-label">Tanggal Datang</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="tgl_datang" placeholder="Tanggal Datang" >
                </div>
            </div>
            <div class="form-group row mb-2">
                <label class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-4">
                    <select class="form-select" name="kategori" id="kategori">
                    <option>- Pilih kategori -</option>
                    <option value="Alat Tulis" >Alat Tulis</option>
                    <option value="Bangunan">Bangunan</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Kendaraan">Kendaraan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-1">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-8">
                    <input type="radio" id="Baik" name="status_barang" value="Baik">
                    <label for="male">Baik</label>
                    <input type="radio" id="Perawatan" name="status_barang" value="Perawatan">
                    <label for="female">Perawatan</label>
                    <input type="radio" id="Rusak" name="status_barang">
                    <label for="other">Rusak</label>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label class="col-sm-2 col-form-label">Harga Satuan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="harga" placeholder="Harga Satuan">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="kirim"><i class="far fa-save"></i> Simpan</button>
            <a  href="inventaris.php" class="btn btn-danger"> <i class="fas fa-arrow-left"></i>Batal</a>
        </form>
    </div>

    <div class="card-footer text-white">
    Inventaris 2016
    </div>
</body>