<?php
include 'koneksi.php';

//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data gecko
    $query = "DELETE FROM gecko WHERE id='$_GET[id]' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
    }