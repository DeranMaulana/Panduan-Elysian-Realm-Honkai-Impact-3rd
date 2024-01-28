<?php

// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';


$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
// $tipe = $_POST['tipe'];


$query = "INSERT INTO user VALUES ( '$username', '$password','$nama')";
$result = mysqli_query($conn, $query);

if (!$result) {
  die("Daftar Gagal!: " . mysqli_errno($conn) .
    " - " . mysqli_error($conn));
} else {
  //tampil alert dan akan redirect ke halaman index.php
  //silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('Akunmu Berhasil Di Daftarkan!.');window.location='login.php';</script>";
}

?>