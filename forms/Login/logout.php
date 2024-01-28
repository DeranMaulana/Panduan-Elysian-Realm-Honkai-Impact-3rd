<?php
include "../Login/koneksi.php";
session_start();
session_destroy();
header("location:../../index.php");
?>