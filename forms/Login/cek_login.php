<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';


$username = $_POST['username'];
$password = $_POST['password'];

$query = "select *from user where username='$username' and password='$password' ";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);


$cek = mysqli_num_rows($data);
if ($cek > 0) {
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $result['nama'];
	$_SESSION['status'] = "login";
	header("location:../../main.php");
} else {
	header("location:index.php?pesan=gagal");
}

?>