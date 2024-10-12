<?php
// Koneksi ke database
require_once 'config/connection.php';

require_once 'config/authentication.php';

// Ambil title yang sudah ada dari tabel 'title'
$sql = "SELECT title_name FROM title ORDER BY id DESC LIMIT 1"; // Ambil title terakhir
$result = $conn->query($sql);

// Inisialisasi variabel title_name
$title_name = '';

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $title_name = $row['title_name']; // Simpan title dari database
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
                            <a class="nav-link" aria-current="page" href="settings.php">Logo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="brand.php">Brand</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <div class="mt-3">
                        <!-- Menampilkan logo jika ada, jika tidak ada tampilkan placeholder -->
                        <div class="container rounded-4 border border-light-subtle mt-4">
                            <div class="col-sm-6 col-6 p-3 mt-2">
                                <h2 class="mb-4">Judul brand navigasi</h2>
                                <form action="config/controller/insert_brand.php" method="post">
                                    <div class="mb-3">
                                        <label for="title_name" class="form-label">Title Name</label>
                                        <!-- Form input akan menampilkan title yang ada dari database -->
                                        <input type="text" class="form-control" id="title_name" name="title_name" value="<?php echo htmlspecialchars($title_name); ?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary fw-semibold">Simpan Perubahan</button>
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

</body>

</html>