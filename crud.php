<?php
include "koneksi.php";
if(isset($_POST['kirim'])){
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $tgl_datang = $_POST['tgl_datang'];
    $kategori = $_POST['kategori'];
    $status_barang = $_POST['status_barang'];
    $harga = $_POST['harga'];
    $query = mysqli_query($koneksi, "INSERT INTO inventaris VALUES ('$kode_barang','$nama_barang','$jumlah','$satuan','$tgl_datang','$kategori','$status_barang','$harga')");
    if($query){
        header("location: inventaris.php");
    } else {
    echo $query;
    }
}
if(isset($_GET['hapus'])){
    $kode_barang = $_GET['hapus'];
    $query =  mysqli_query($koneksi, "DELETE FROM inventaris WHERE kode_barang = '$kode_barang'");

    if($query){
        header("location: inventaris.php");
    } else {
        echo $query;
    }
}
if(isset($_GET['ubah'])){
    $kode_barang    = $_GET['ubah'];
    $query = mysqli_query($koneksi,"SELECT * FROM inventaris WHERE kode_barang = '$kode_barang'");
    $data  = mysqli_fetch_array($query);
    $kode_barang = $data['kode_barang'];
    $nama_barang = $data['nama_barang'];
    $jumlah = $data['jumlah'];
    $satuan = $data['satuan'];
    $tgl_datang = $data['tgl_datang'];
    $kategori = $data['kategori'];
    $status_barang = $data['status_barang'];
    $harga = $data['harga'];
}
if(isset($_POST['update'])){
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $tgl_datang = $_POST['tgl_datang'];
    $kategori = $_POST['kategori'];
    $status_barang = $_POST['status_barang'];
    $harga = $_POST['harga'];
    $query = mysqli_query($koneksi,"UPDATE inventaris SET kode_barang='$kode_barang', nama_barang='$nama_barang', jumlah='$jumlah', satuan='$satuan', tgl_datang='$tgl_datang', kategori='$kategori', status_barang='$status_barang', harga='$harga' WHERE kode_barang='$kode_barang';");
    if($query){
        header("location: inventaris.php");
    } else {
        echo $query;
    }
}
?>