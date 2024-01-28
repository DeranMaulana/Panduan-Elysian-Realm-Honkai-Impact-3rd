<?php


// menghubungkan dengan koneksi
include '../../forms/Login/koneksi.php';

$query = "DELETE FROM user WHERE username = '". $_GET['username'] . "'";
$result = mysqli_query($conn, $query);

if (!$result) {
  die("Hapus Gagal!: " . mysqli_errno($conn) .
    " - " . mysqli_error($conn));
} else {
  //tampil alert dan akan redirect ke halaman index.php
  //silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('Akun Berhasil Di Hapus!.');window.location='../admin.php';</script>";
}

?>