<?php
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['username'])) {
  // Jika sudah login, redirect ke dashboard
  header('Location: dashboard.php');
  exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Dashboard</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="login/images/icons/favicon.ico" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/css/util.css" />
  <link rel="stylesheet" type="text/css" href="login/css/main.css" />

  <style>
    #background-image {
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      opacity: 0;
      /* Mulai dengan gambar tidak terlihat */
      transition: opacity 1s ease-in-out;
      /* Durasi animasi */
    }

    #background-image.fade-in {
      opacity: 1;
      /* Gambar menjadi sepenuhnya terlihat */
    }
  </style>
  <!--===============================================================================================-->
</head>

<body style="background-color: #666666">
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" action="config/controller/login.php" method="POST">
          <span class="login100-form-title p-b-43"> Login to continue </span>

          <!-- Jika ada pesan error, alert akan muncul di sini -->

          <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="username" required />
            <span class="focus-input100"></span>
            <span class="label-input100">Username</span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password" required />
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
          </div>

          <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger" role="alert">
              <?php
              echo htmlspecialchars($_SESSION['error']);
              unset($_SESSION['error']);  // Hapus pesan error setelah ditampilkan
              ?>
            </div>
          <?php endif; ?>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">Login</button>
          </div>
        </form>



        <div id="background-image" class="login100-more"></div>

      </div>
    </div>
  </div>

  <!--===============================================================================================-->
  <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="login/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="login/vendor/bootstrap/js/popper.js"></script>
  <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="login/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="login/vendor/daterangepicker/moment.min.js"></script>
  <script src="login/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="login/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="login/js/main.js"></script>

  <script>
    const unsplashAccessKey = 'oP2vJsrMQ9Srp3CIB7CWa1S7_IvibBXRLSXg6g8cuJo';
    const unsplashUrl = `https://api.unsplash.com/photos/random?client_id=${unsplashAccessKey}&orientation=landscape&query=business`;

    function getRandomImage() {
      fetch(unsplashUrl)
        .then(response => response.json())
        .then(data => {
          const imageUrl = data.urls.regular;
          const backgroundImageDiv = document.getElementById('background-image');

          // Set background image
          backgroundImageDiv.style.backgroundImage = `url(${imageUrl})`;

          // Tambahkan delay kecil untuk memastikan gambar dimuat dengan benar sebelum animasi
          setTimeout(() => {
            backgroundImageDiv.classList.add('fade-in'); // Tambahkan kelas animasi
          }, 100); // 100 ms delay
        })
        .catch(error => {
          console.error('Error fetching image:', error);
        });
    }

    window.onload = getRandomImage;
  </script>


</body>

</html>