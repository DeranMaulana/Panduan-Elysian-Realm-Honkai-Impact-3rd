<?php
include "../../Login/koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$id = $_POST['id'];
$komen = $_POST['komen'];
$nama = $_POST['nama'];
//tanggal
$tanggal = date("Y-m-d");
//waktu
$time = date("H:i:s");

// menambah data ke dalam tabel
// $kueri = mysql_query ("INSERT INTO tb_komentar(nama, website, pesan, tanggal, time) values ('$_POST[nama]', '$_POST[website]', '$_POST[pesan]', '$tanggal','$time')");

// //menampilkan data ke dalam tabel
// $query = mysql_query ("SELECT * FROM tb_komentar ORDER BY time || tanggal DESC");
// while ($d = mysql_fetch_array ($query))



$query = "INSERT INTO komen_hoh (komen,tanggalkomen,waktukomen,nama) VALUES ('$komen', '$tanggal','$time' ,'$nama')";
$result = mysqli_query($conn, $query);

if (!$result) {
  die("Komentar Anda Gagal!: " . mysqli_errno($conn) .
    " - " . mysqli_error($conn));
} else {
  //tampil alert dan akan redirect ke halaman index.php
  //silahkan ganti index.php sesuai halaman yang akan dituju
  header("location:../Human.php#komentar");
}
?>