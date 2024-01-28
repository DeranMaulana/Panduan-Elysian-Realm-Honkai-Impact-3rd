<?php
session_start();
include "../../Login/koneksi.php";

if (isset($_GET['username'])) {
    $username = ($_GET["username"]);
    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Error: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    }
    $data = mysqli_fetch_assoc($result);
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada 
   database');window.location='produk.php';</script>";
    }
} else {

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Profile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicons -->
    <link href="../Aset/Signet/Elysia.png" rel="icon">
    <link href="../Aset/Signet/Elysia.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../Aset/css/main.css">
    <link rel="stylesheet" href="../../Login/css/style.css">

    <!-- =======================================================
  * Template Name: Tempo - v4.10.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- cek apakah sudah login -->

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="../../../main.php"><img src="../Aset/Signet/Elysia.png" alt=""> Elysian
                    Realm</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="../../../assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="../../../main.php">Home</a></li>
                    <li><a class="nav-link scrollto active" href="#valkyrie">Profile</a></li>
                    <li class="dropdown"><a href="#"><span>Halo!
                                <?php echo $_SESSION['nama']; ?>
                            </span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="../../Login/logout.php">Logout</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container mt-4">
                <ol>
                    <li><a href="../../../main.php">Home</a></li>
                    <li>Profile</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->
        <section id="profile" class="portfolio-details">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                        <h1 class="text-center">Edit Profile</h1>
                        <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
                            <label class="label" for="name">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>"
                                required>
                            <label class="label" for="name">Username</label>
                            <input type="text" name="username" class="form-control"
                                value="<?php echo $data['username']; ?>" required disabled>
                            <label class="label" for="password">Password</label>
                            <input type="password" name="password" class="form-control"
                                value="<?php echo $data['password']; ?>" required><br>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Demauz#1449</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../../assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script src="../../../assets/js/main.js"></script>

</body>

</html>