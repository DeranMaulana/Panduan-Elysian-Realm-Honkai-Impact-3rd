<?php
include "../Login/koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Herrscher of Truth - ER</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Favicons -->
  <link href="Aset/Signet/Elysia.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="Aset/css/main.css">

  <!-- =======================================================
  * Template Name: Tempo - v4.10.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="../../index.php"><img src="Aset/Signet/Elysia.png" alt=""> Elysian Realm</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../../index.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="#valkyrie">Valkyrie</a></li>
          <li><a class="nav-link scrollto" href="#nuke">Nuke</a></li>
          <li><a class="nav-link scrollto" href="#gundam">Gundam</a></li>
          <li><a class="nav-link scrollto" href="#komentar">Komentar</a></li>
          <li><a class="nav-link scrollto" href="../Login/login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../../index.php">Home</a></li>
          <li>Valkyrie</li>
        </ol>
        <h2>Herrscher of Truth</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="valkyrie" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="Aset/hotr/1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="Aset/hotr/2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="Aset/hotr/3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informasi Valkyrie</h3>
              <ul>
                <li><strong>Elemen : </strong>Ice <img src="Aset/Tipe Damage/Core_Ice_DMG.webp" width="35px" alt=""></li>
                <li><strong>Tipe : </strong>IMG <img src="Aset/Tipe Battlesuit/imaginary.webp" width="35px" alt=""></li>
                <li><strong>Senjata : </strong>Cannons / Heavy <img src="Aset/Tipe Senjata/Cannons.png" width="35px" alt=""></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Cara Bermain</h2>
              <p>
                Herrscher of Truth memiliki 2 cara bermain di elysian realm, yaitu :
              </p>
              <p><b>Nuke (Ultimate)</b></p>
              <p><b>Gundam (Continuation Form)</b></p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
    <section id="nuke" class="bg-secondary">
      <div  class="cta">
        <div class="container">
          <div class="text-center">
            <br><h1>Nuke Playstyle</h1>
            <!-- Icon Divider-->
            <div class="divider-custom text-white">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon text-white"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
          </div>
          </div>
        </div>
     </div><!-- End Cta Section -->
      <div class="container-fluid text-center text-white text-uppercase text-secondary bg-secondary" id="nuke">
        <br><h1 class="page-section-heading text-center text-uppercase text-white mb-0 mt-4">Rekomendasi Emblem & Support</h1>
        <br><div class="row">
            <div class="col-4 border">
                <h1>Start</h1>
                <img class="mx-auto img-fluid" src="Aset/Item/Rainbow_of_Absence.png" alt="" width="100px">
                <img class="mx-auto img-fluid" src="Aset/Item/The_Lonely_Moon.png" alt="" width="100px"><br>
                <img class="mx-auto img-fluid" src="Aset/Chibi/Azure_Empyrea_Chibi_29.png" alt="">
                <img class="mx-auto img-fluid" src="Aset/Chibi/Lightning_Empress_Chibi_29.png" alt="">
            </div>
            <div class="col-4 border">
                <h1>Middle</h1>
                <img class="mx-auto img-fluid" src="Aset/Item/forbidseed.png" alt="" width="100px">
                <img class="mx-auto img-fluid" src="Aset/Item/The_Lonely_Moon.png" alt="" width="100px"><br>
                <img class="mx-auto img-fluid" src="Aset/Chibi/Azure_Empyrea_Chibi_29.png" alt="">
                <img class="mx-auto img-fluid" src="Aset/Chibi/Lightning_Empress_Chibi_29.png" alt="">
            </div>
            <div class="col-4 border">
                <h1>Late</h1>
                <img class="mx-auto img-fluid" src="Aset/Item/Stained_Sakura.png" alt="" width="100px">
                <img class="mx-auto img-fluid" src="Aset/Item/Boundless_Logos.png" alt="" width="100px"><br>
                <img class="mx-auto img-fluid" src="Aset/Chibi/Azure_Empyrea_Chibi_29.png" alt="">
                <img class="mx-auto img-fluid" src="Aset/Chibi/Lightning_Empress_Chibi_29.png" alt="">
            </div>
        </div>
        <br>
    </div>

    <div class="container-fluid text-center text-white text-uppercase text-secondary bg-secondary">
        <div class="row center text-center">
            <h1 class="mt-4">Signet Eksklusif</h1>
            <div class="col-4 border mt-3">
                <h2 class="mt-4">start</h2>
                <img class="mx-auto img-fluid" src="Aset/Signet/Elysia.png" alt="">
                <h2>Blessing of Intellect Core</h2>
            </div>
            <div class="col-4 border mt-3">
                <h2 class="mt-4">Start</h2>
                <img class="mx-auto img-fluid" src="Aset/Signet/Elysia.png" alt="">
                <h2>Blessing of Genuine Solution</h2>
            </div>
            <div class="col-4 border mt-3">
                <h2 class="mt-4">Opsional</h2>
                <img class="mx-auto img-fluid" src="Aset/Signet/Elysia.png" alt="">
                <h2>Blessing of Vector</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center text-white text-uppercase text-secondary bg-secondary">
        <div class="row">
            <h1 class="mt-4">Signet Biasa</h1>
            <div class="col-3 border mt-3">
                <img class="mx-auto img-fluid" src="Aset/Signet/Griseo.png" alt="">
                <h2>Griseo2</h2>
            </div>
            <div class="col-3 border mt-3">
                <img class="mx-auto img-fluid" src="Aset/Signet/Hua.png" alt="">
                <h2>Hua2</h2>
            </div>
            <div class="col-3 border mt-3">
                <img class="mx-auto img-fluid" src="Aset/Signet/Mobius.png" alt="">
                <h2>Mobius1</h2>
            </div>
            <div class="col-3 border mt-3">
                <img class="mx-auto img-fluid" src="Aset/Signet/Sakura.png" alt="">
                <h2>Sakura1</h2>
            </div>
        </div><br>
    </div>
    <div class="container-fluid text-center text-secondary text-uppercase text-secondary bg-secondary">
        <br><h1 class="page-section-heading text-center text-uppercase text-white mb-0 mt-4">Cara Bermain</h1>
        <div class="mt-4">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ESvpB-qbreI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div><br>
        <div class="text-center text-white">
            <h2>Weap skill > tap ult (masuk gundam form) > combo atk > weap skill > ultimate</h2> <br>
        </div>
    </div>
    </section>
      <!-- ======= Cta Section ======= -->
      <!-- End Cta Section -->
    <section id="gundam" class="bg-secondary">
      <div class="cta">
        <div class="container">
          <div class="text-center">
            <br><h1>Gundam Playstyle</h1>
            <!-- Icon Divider-->
            <div class="divider-custom text-white">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon text-white"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
          </div>
          </div>
        </div>
      </div>
      <div class="container-fluid text-center text-white text-uppercase text-secondary bg-secondary" id="gundam">
        <br><h1 class="page-section-heading text-center text-uppercase text-white mb-0 mt-4">Rekomendasi Emblem & Support</h1>
        <br><div class="row">
            <div class="col-4 border">
                <h1>Start</h1>
                <img class="mx-auto img-fluid" src="Aset/Item/Pseudo_Miracle.png" alt="" width="100px">
                <img class="mx-auto img-fluid" src="Aset/Item/The_Lonely_Moon.png" alt="" width="100px"><br>
                <img class="mx-auto img-fluid" src="Aset/Chibi/Azure_Empyrea_Chibi_29.png" alt="">
                <img class="mx-auto img-fluid" src="Aset/Chibi/Blood_Rose_Chibi_29.png" alt="">
            </div>
            <div class="col-4 border">
                <h1>Middle</h1>
                <img class="mx-auto img-fluid" src="Aset/Item/forbidseed.png" alt="" width="100px">
                <img class="mx-auto img-fluid" src="Aset/Item/The_Lonely_Moon.png" alt="" width="100px"><br>
                <img class="mx-auto img-fluid" src="Aset/Chibi/Azure_Empyrea_Chibi_29.png" alt="">
                <img class="mx-auto img-fluid" src="Aset/Chibi/Blood_Rose_Chibi_29.png" alt="">
            </div>
            <div class="col-4 border">
                <h1>Late</h1>
                <img class="mx-auto img-fluid" src="Aset/Item/Thorny_Crown.png" alt="" width="100px">
                <img class="mx-auto img-fluid" src="Aset/Item/Falling_in_Past_Light.png" alt="" width="100px"><br>
                <img class="mx-auto img-fluid" src="Aset/Chibi/Azure_Empyrea_Chibi_29.png" alt="">
                <img class="mx-auto img-fluid" src="Aset/Chibi/Blood_Rose_Chibi_29.png" alt="">
            </div>
        </div>
        <br>
    </div>
    <div class="container-fluid text-center text-white text-uppercase text-secondary bg-secondary">
        <div class="row center text-center">
            <h1 class="mt-4">Signet Eksklusif</h1>
            <div class="col-4 border mt-3">
                <h2 class="mt-4">start</h2>
                <img class="mx-auto img-fluid" src="Aset/Signet/Elysia.png" alt="">
                <h2>Blessing of Continuation</h2>
            </div>
            <div class="col-4 border mt-3">
                <h2 class="mt-4">Start</h2>
                <img class="mx-auto img-fluid" src="Aset/Signet/Elysia.png" alt="">
                <h2>Blessing of Konstruktion</h2>
            </div>
            <div class="col-4 border mt-3">
                <h2 class="mt-4">Opsional</h2>
                <img class="mx-auto img-fluid" src="Aset/Signet/Elysia.png" alt="">
                <h2>Blessing of Vector</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center text-white text-uppercase text-secondary bg-secondary">
        <div class="row">
            <h1 class="mt-4">Signet Biasa</h1>
            <div class="col-3 border mt-3">
                <img class="mx-auto img-fluid" src="Aset/Signet/Verve.png" alt="">
                <h2>Vill V2</h2>
            </div>
            <div class="col-3 border mt-3">
                <img class="mx-auto img-fluid" src="Aset/Signet/Hua.png" alt="">
                <h2>Hua2</h2>
            </div>
            <div class="col-3 border mt-3">
                <img class="mx-auto img-fluid" src="Aset/Signet/Su.png" alt="">
                <h2>su2</h2>
            </div>
            <div class="col-3 border mt-3">
                <img class="mx-auto img-fluid" src="Aset/Signet/Eden.png" alt="">
                <h2>eden1</h2>
            </div>
        </div><br>
    </div>
    <div class="container-fluid text-center text-secondary text-uppercase text-secondary bg-secondary">
        <br><h1 class="page-section-heading text-center text-uppercase text-white mb-0 mt-4">Cara Bermain</h1>
        <div class="mt-4">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ThsDUAwHJBk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div><br>
        <div class="text-center text-white">
            <h2>Youtube : Citrus</h2> <br>
        </div>
    </div>
    </section>
    <section id="komentar">

      <!-- <form id="form1" name="form1" method="post" action="simpan.php">
        <table width="200" border="1">
          <tr>
            <td colspan="2"><strong>Tingggalkan Komentar Anda : </strong></td>
          </tr>
          <tr>
            <td width="88">
              <input type="text" name="nama" id="nama" / hidden>
            </td>
          </tr>

          <tr>
            <td>Komentar</td>
            <td><label for="textfield"></label>
              <label for="textarea"></label>
              <textarea name="pesan" id="pesan"></textarea>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label for="Submit"></label>
              <input type="submit" name="Submit" value="Submit" id="Submit" />
              <label for="label"></label>
              <input type="reset" name="Submit2" value="Reset" id="label" />
            </td>
          </tr>
        </table>
        <p>Komentar Lainnya : </p>

      </form> -->

      <div class="container mt-4">
        <div class="card mx-auto" style="max-width:800px">
          <div class="card-header bg-transparent">
            <div class="navbar navbar-expand p-0">
              <ul class="navbar-nav me-auto align-items-center">
                <li class="nav-item">

                  <div class=" d-flex text-center text-secondary ">
                    <h2>Komentar</h2>
                  </div>

                </li>

              </ul>
            </div>
          </div>
          <div class=" card-body p-4" style="height: 500px; overflow: auto;">
            <?php
            $query = "select * from komen_hotr ORDER BY kodekomen";
            $result = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_array($result)) {
              ?>
              <div class="d-flex align-items-baseline mb-4">
                <div class="pe-2">
                  <div>
                    <div class="small">
                      <?php echo $data['nama']; ?>
                    </div>
                    <div class="card card-text d-inline-block p-2 px-3 m-1">
                      <?php echo $data['komen']; ?>
                    </div>
                  </div>
                  <div>
                    <div class="small">
                      <?php echo $data['waktukomen'], " ", $data['tanggalkomen']; ?>
                    </div>
                  </div>
                </div>
              </div>

              <?php
            }
            ?>

          </div>
          <form action="../Login/login.php" method="POST" class="signin-form">
            <br>
            <div class="card-footer bg-white position-absolute w-100 bottom-0 m-0 p-1">
              <div class="input-group">
                <div class="input-group-text bg-transparent border-0">

                </div>

                <input type="text" name="komen" class="form-control border-0" placeholder="Tuliskan Komentar Anda...">
                <div class="input-group-text bg-transparent border-0">
                </div>
                <div class="input-group-text bg-transparent border-0">
                  <button class="btn btn-light text-secondary">
                    <i class="fas fa-paper-plane"></i>
                  </button>
                
                </div>
          </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
            $(window).scroll(function() {
                if ($(document).scrollTop() > 50) {
                    $('.nav').addClass('affix');
                    console.log("OK");
                } else {
                    $('.nav').removeClass('affix');
                }
            });
        </script>

</body>

</html>