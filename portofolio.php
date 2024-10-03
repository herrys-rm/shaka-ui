<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Saka Design - Portofolio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- flat-icon -->
  <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
    <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/Syaka.png" alt="Icon">
  </div>
  <!-- Spinner End -->


  <!-- Topbar Start -->
  <?php require_once 'topbar.php' ?>
  <!-- Topbar End -->


  <!-- Navbar Start -->
  <?php require_once 'navbar.php' ?>
  <!-- Navbar End -->


  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="display-1 text-white animated slideInDown">Portofolio</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb text-uppercase mb-0">
          <li class="breadcrumb-item"><a class="text-white" href="index.php">Beranda</a></li>
          <li class="breadcrumb-item text-primary active" aria-current="page">Portofolio</li>
        </ol>
      </nav>

    </div>
  </div>
  <!-- Page Header End -->
  <marquee direction="right">
    <h3>Di Bawah Ini Adalah Berbagai Macam Desain Kami</h3>
  </marquee>
  <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
    <!-- <h4 class="text-primary">Paket Harga</h4> -->
    <h1 class="display-4 mb-4 text-primary">Portofolio</h1>
    <p class="mb-0">Berikut adalah proyek yang pernah kami tangani sejak perusahaan ini di bangun </p>
  </div>

  <!-- portofolio -->
  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order">

        <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Galeri Portofolio</li>
          <!-- <li data-filter=".filter-remodeling">Remodeling</li>
            <li data-filter=".filter-construction">Construction</li>
            <li data-filter=".filter-repairs">Repairs</li>
            <li data-filter=".filter-design">Design</li> -->
        </ul><!-- End Projects Filters -->

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-3 col-md-6 portfolio-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Remodeling 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1"
                  data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="#" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-construction">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Construction 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/construction-1.jpg" title="Construction 1"
                  data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="#" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-repairs">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Repairs 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/repairs-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="#" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-design">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Design 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/design-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="#" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Remodeling 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/remodeling-2.jpg" title="Remodeling 2"
                  data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="#" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-construction">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Construction 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/construction-2.jpg" title="Construction 2"
                  data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="#" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-repairs">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Repairs 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/repairs-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="#" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-design">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/design-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Design 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/design-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="#" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-remodeling">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Remodeling 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/remodeling-3.jpg" title="Remodeling 3"
                  data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="#" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-construction">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Construction 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/construction-3.jpg" title="Construction 3"
                  data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                    class="bi bi-zoom-in"></i></a>
                <a href="#" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-repairs">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Repairs 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/repairs-3.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="#" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-design">
            <div class="portfolio-content h-100">
              <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Design 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="assets/img/projects/design-3.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="#" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Projects Item -->

        </div><!-- End Projects Container -->

      </div>

    </div>
  </section>
  <!-- portofolio -->



  <!-- Footer Start -->
  <?php require_once 'footer.php' ?>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>