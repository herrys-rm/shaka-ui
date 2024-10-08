<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arkitektur - Architecture HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php require_once 'assets.php' ?>

</head>

<body>
    <!-- Topbar Start -->
    <?php require_once 'topbar.php' ?>
    <!-- Topbar End -->

    <!-- Spinner Start -->
    <?php require_once 'navbar.php' ?>
    <!-- Spinner End -->

    <!-- Spinner Start -->
    <?php require_once 'spinner.php' ?>
    <!-- Spinner End -->



    <!-- Navbar Start -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Kontak Kami</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Beranda</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Kontak</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-4 mb-4 text-primary">Kontak Kami</h1>
                <p class="mb-0">Jika Anda Tertarik Dengan layanan Kami, Silahkan Hubungi Kami</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Alamat Kantor</p>
                                <h3 class="mb-0">Jl. Sawing No.RT19, Majidi, Kec. Selong, Kabupaten Lombok Timur, Nusa Tenggara Barat. 83619</h3>
                            </div>
                        </div>

                        <div class="row g-5">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                            <i class="fa fa-phone-alt text-primary"></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="mb-2">Nomor telepon</p>
                                            <h3 class="mb-0">+62 819-3214-8688</h3>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="d-flex flex-column justify-content-between h-100">

                                    <div class="bg-light d-flex align-items-center w-100 p-4">
                                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                            <i class="fa fa-envelope-open text-primary"></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="mb-2">Email</p>
                                            <h3 class="mb-0">syakajulfan@gmail.com</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->



            <!-- Google Map Start -->
            <div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.289423536706!2d116.52141787321203!3d-8.66400088816764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4fa0d9e0b415%3A0xaedfe338814df116!2sSyaka%20Design%20Kontruksi!5e0!3m2!1sid!2sid!4v1728175414081!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- Google Map End -->


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