<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Saka Design - Portofolio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <?php require_once 'assets.php' ?>
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

        <!-- End Projects Filters -->

        <div class="row gy-4 portfolio-container mb-3" data-aos="fade-up" data-aos-delay="200">

          <?php
          require_once 'admin/config/connection.php';
          $sql = "SELECT * FROM portfolio";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $image_id = $row['id'];
              $image_path = 'uploads/' . $row['image'];
              $image_title = htmlspecialchars($row['image_title'], ENT_QUOTES, 'UTF-8');
              $img_desc = htmlspecialchars($row['img_desc'], ENT_QUOTES, 'UTF-8');
          ?>

              <div class="col-lg-3 col-md-6 portfolio-item filter-<?php echo $row['category']; ?>">
                <div class="portfolio-content h-100">
                  <img src="<?php echo $image_path; ?>" class="img-fluid" alt="<?php echo $image_title; ?>">
                  <div class="portfolio-info">
                    <h4><?php echo $image_title; ?></h4>
                    <p><?php echo $img_desc; ?></p>
                    <a href="<?php echo $image_path; ?>" title="<?php echo $image_title; ?>" data-gallery="portfolio-gallery-<?php echo $row['category']; ?>" class="glightbox preview-link">
                      <i class="bi bi-zoom-in"></i>
                    </a>
                    <a href="portfolio-details.php?id=<?php echo $image_id; ?>" title="More Details" class="details-link">
                      <i class="bi bi-link-45deg"></i>
                    </a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

          <?php
            }
          } else {
            echo "<p>No portfolio items available.</p>";
          }
          ?>

        </div>


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