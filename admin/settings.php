<?php
require_once 'config/authentication.php';

require_once 'config/connection.php';
// Inisialisasi variabel $logo_path
$logo_path = 'uploads/placeholder.png'; // Gambar placeholder yang ada di folder 'uploads'

// Ambil logo terakhir dari database
$sql = "SELECT logo_image_path FROM logo ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (!empty($row['logo_image_path'])) {
        // Tambahkan path 'uploads/' ke nama file yang diambil dari database
        $logo_path = '../uploads/' . $row['logo_image_path'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Charts - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <!-- Header -->
    <?php require_once 'config/components/header.php' ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <!-- Navbar -->
            <?php require_once 'config/components/navbar.php' ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h2 class="mt-4 fw-semibold">Settings</h2>
                    <ul class="nav nav-tabs mt-4 fw-semibold">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="settings.php">Logo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="brand.php">Brand</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <div class="p-3 mt-3 px-4 rounded-4 border border-secondary-subtle">
                        <!-- Menampilkan logo jika ada, jika tidak ada tampilkan placeholder -->
                        <div class="d-flex align-items-center position-relative">
                            <img src="<?php echo $logo_path; ?>" class="flex-shrink-0 me-3 rounded-circle" alt="Company Logo" style="width: 100px; height: 100px;">

                            <div>
                                <p>Setidaknya 800x800 piksel direkomendasikan. JPG atau PNG diperbolehkan</p>

                                <!-- Form Upload -->
                                <form action="config/controller/upload_logo.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">

                                        <!-- Menggunakan form-control-sm untuk mengecilkan input -->
                                        <input class="form-control form-control-sm w-auto" type="file" name="logo_image" id="logo_image" accept="image/*" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary fw-semibold">Upload Logo</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php require_once 'config/components/footer.php' ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="assets/demo/chart-pie-demo.js"></script>
</body>

</html>