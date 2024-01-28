<?php
session_start();
include "forms/Login/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Panduan Elysian Realm</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="forms/Valkyrie/Aset/Signet/Elysia.png" rel="icon">
  <link href="forms/Valkyrie/Aset/Signet/Elysia.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v4.10.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- cek apakah sudah login -->
  <?php

  if ($_SESSION['status'] != "login") {
    header("location:forms/Login/login.php?pesan=belum_login");
  }
  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="main.php"><img src="forms/Valkyrie/Aset/Signet/Elysia.png" alt=""> Elysian Realm</a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Valkyrie</a></li>
          <li><a class="nav-link scrollto" href="#team">Kelompok</a></li>
          <li class="dropdown"><a href="#"><span>Halo!
                <?php echo $_SESSION['nama']; ?>
              </span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li><a href="forms/Valkyrie/user/profile.php?username=<?php echo $_SESSION['username']; ?>">Profile</a></li>
              <li><a href="forms/Login/logout.php">Logout</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Selamat <strong>Datang</strong></h3>
      <h1>Panduan Elysian Realm</h1><br>
      <strong><a href="#portfolio" class="btn-get-started scrollto">Valkyrie</a></strong>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title">
          <h2>Valkyrie</h2>
          <h3>Daftar <span>Valkyrie</span> META</h3>
          <p>Berikut adalah Valkyrie yang enak untuk dimainkan pada patch saat ini</p>
          <h2>V6.3</h2>
        </div>
        <div class="row gy-4 portfolio-container">

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="forms/Valkyrie/Serenade.php" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="assets/img/Valkyrie/6s.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="forms/Valkyrie/Serenade.php" title="More Details">Sixth Serenade</a></h4>
              </div>
            </div>
          </div><!-- End Portfolio Item -->
          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <a href="forms/Valkyrie/Truth.php" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="assets/img/Valkyrie/hotr.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="forms/Valkyrie/Truth.php" title="More Details">Herrscher of Truth</a></h4>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <a href="forms/Valkyrie/JadeKnight.php" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="assets/img/Valkyrie/sus.png" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="forms/Valkyrie/JadeKnight.php" title="More Details">Jade Knight</a></h4>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
            <div class="portfolio-wrap">
              <a href="forms/Valkyrie/Human.php" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="assets/img/Valkyrie/hoh.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="forms/Valkyrie/Human.php" title="More Details">Herrscher of Human</a></h4>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-books">
            <div class="portfolio-wrap">
              <a href="forms/Valkyrie/Flamescion.php" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="assets/img/Valkyrie/hof.png" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="forms/Valkyrie/Flamescion.php" title="More Details">Herrscher of Flamescion</a></h4>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="forms/Valkyrie/ReveristCalico.php" data-gallery="portfolio-gallery-app" class="glightbox"><img
                  src="assets/img/Valkyrie/pardo.png" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="forms/Valkyrie/ReveristCalico.php" title="More Details">Reverist Calico</a></h4>
              </div>
            </div>
          </div><!-- End Portfolio Item -->
        </div>
      </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Kelompok</h2>
          <h3>Anggota Kelompok<span> Elementary OS</span> IF 2</h3>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/kelompok/Der.jfif" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/derannmr/" target="_blank" rel="noopener noreferrer"><i
                      class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/derannmr/" target="_blank" rel="noopener noreferrer"><i
                      class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Deran Maulana Rizki</h4>
                <span>10121061</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/kelompok/Reza.jfif" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/m_rezaphlv/" target="_blank"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Muhamad Reza Pahlevi</h4>
                <span>10121062</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/kelompok/Alvin.jfif" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/alvinsaputr_" target="_blank"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Alvin Saputra</h4>
                <span>10121063</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
              <br>
              <br>
                <img src="assets/img/kelompok/fesal.png" class="img-fluid" alt="">
              </div>
              <br>
              <br>
              <br>
              <div class="member-info">
                <h4>Faisal Rizky</h4>
                <span>10121064</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
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
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>