<?php


// menghubungkan dengan koneksi
include '../../forms/Login/koneksi.php';

$query = "DELETE FROM komen_hoh WHERE kodekomen = '". $_GET['kodekomen'] . "'";
$result = mysqli_query($conn, $query);

if (!$result) {
  die("Hapus Gagal!: " . mysqli_errno($conn) .
    " - " . mysqli_error($conn));
} else {
  //tampil alert dan akan redirect ke halaman index.php
  //silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('Komentar Berhasil Di Hapus!.');window.location='../hoh.php';</script>";
}

?>