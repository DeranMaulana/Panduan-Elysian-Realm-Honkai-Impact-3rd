<?php
include "../../Login/koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];



$query = "UPDATE user SET nama = '$nama', username = '$username', password = '$password'";
$query .= "WHERE username = '$username'";
$result = mysqli_query($conn, $query);
// periska query apakah ada error
if (!$result) {
  die("Query gagal dijalankan: " . mysqli_errno($conn) .
    " - " . mysqli_error($conn));
} else {
  //tampil alert dan akan redirect ke halaman index.php
  //silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('DATA BERHASIL DIUBAH.');window.location='../../Login/login.php';</script>";
}