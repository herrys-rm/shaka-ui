<?php
require_once 'config/connection.php';

require_once 'config/authentication.php';

// Ambil semua data gambar dari tabel portfolio
$sql = "SELECT image, image_title, img_desc FROM portfolio";
$result = $conn->query($sql);
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

    <style>
        /* Efek hover yang sederhana */
        .card {
            transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            /* Mengangkat card sedikit ke atas */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            /* Menambahkan bayangan lebih tegas */
        }

        /* Efek sederhana pada gambar */
        .card-img-top {
            transition: opacity 0.3s ease-in-out;
        }

        .card-img-top:hover {
            opacity: 0.9;
            /* Sedikit mengurangi opacity pada hover untuk efek halus */
        }
    </style>
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
                            <a class="nav-link" href="brand.php">Brand</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <!-- form upload -->
                    <div class="mt-3">
                        <div class="container mt-4">
                            <div class="row">
                                <!-- Tombol Upload -->
                                <div class="col mb-3">
                                    <button type="button" class="btn btn-secondary rounded-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#uploadModal">
                                        <i class="fa-solid fa-arrow-up-from-bracket me-2"></i> Upload
                                    </button>
                                </div>
                            </div>

                            <!-- Menampilkan semua gambar yang diupload -->
                            <div class="row justify-content-start">
                                <!-- Looping data dari database -->
                                <?php
                                require_once 'config/connection.php';
                                $sql = "SELECT * FROM portfolio";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $image_id = $row['id'];
                                        $image_path = '../uploads/' . $row['image'];
                                        $image_title = $row['image_title'];
                                        $img_desc = $row['img_desc'];
                                ?>
                                        <div class="col-md-4 mb-4">
                                            <div class="card">
                                                <img src="<?php echo $image_path; ?>" class="card-img-top" alt="<?php echo $image_title; ?>" style="height: 200px; object-fit: cover;">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $image_title; ?></h5>
                                                    <p class="card-text"><?php echo $img_desc; ?></p>
                                                    <button class="btn btn-danger delete-image" data-id="<?php echo $image_id; ?>" title="Hapus Gambar"><i class="fa-solid fa-trash-can"></i></button>
                                                </div>
                                                <!-- <div class="card-footer">

                                                </div> -->
                                            </div>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "<p>Tidak ada gambar yang diupload.</p>";
                                }

                                $conn->close();
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Bootstrap untuk upload -->
                    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Upload Gambar</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="upload_form" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="image_title" class="form-label">Judul Gambar</label>
                                            <input type="text" class="form-control" id="image_title" name="image_title" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="image" class="form-label">Pilih Gambar</label>
                                            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="img_desc" class="form-label">Deskrips</label>
                                            <textarea class="form-control" id="img_desc" name="img_desc" rows="3" required></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
            <?php require_once 'config/components/footer.php' ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/insert_scripts.js"></script>
    <script src="js/delete_scripts.js"></script>

</body>



</html>