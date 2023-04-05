<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'responsi';

    $koneksi = mysqli_connect($hostname, $username, $password, $database) or die(mysqli_error($koneksi));
?>