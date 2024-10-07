<?php
// Dapatkan nama file saat ini
$current_page = basename($_SERVER['PHP_SELF']);

// Koneksi ke database
require_once 'admin/config/connection.php';


// Ambil logo terakhir dari tabel 'logo'
$sql = "SELECT logo_image_path FROM logo ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

// Inisialisasi variabel $logo_path
$logo_path = 'uploads/placeholder.png'; // Gambar default jika tidak ada logo

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (!empty($row['logo_image_path'])) {
        $logo_path = 'uploads/' . $row['logo_image_path']; // Path logo terakhir
    }
}

$title_query = "SELECT title_name FROM title LIMIT 1";
$title_result = $conn->query($title_query);

$title_name = '';
if ($title_result->num_rows > 0) {
    $title_row = $title_result->fetch_assoc();
    $title_name = $title_row['title_name'];
}

?>

<nav class="navbar navbar-expand-lg bg-navbar navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="#" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="text-text-light m-0"><img class="me-3" src="<?php echo $logo_path; ?>" alt="Icon"><?php echo $title_name; ?></h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link <?php if ($current_page == 'index.php') {
                                                                echo 'active';
                                                            } ?>">Beranda</a>
            <a href="tentang-selengkapnya.php" class="nav-item nav-link <?php if ($current_page == 'tentang-selengkapnya.php') {
                                                                            echo 'active';
                                                                        } ?>">Tentang Kami</a>
            <a href="portofolio.php" class="nav-item nav-link <?php if ($current_page == 'portofolio.php') {
                                                                    echo 'active';
                                                                } ?>">Portofolio</a>
            <a href="contact.php" class="nav-item nav-link <?php if ($current_page == 'contact.php') {
                                                                echo 'active';
                                                            } ?>">Kontak</a>

        </div>
        <a href="https://web.whatsapp.com/send?phone=6281932148688&text=Halo%21%20Syaka%20Konstruksi%2C%20boleh%20saya%20konsultasi%20dulu%3F" class="btn btn-ijo rounded-pill py-2 px-4 d-none d-lg-block">Hubungi Kami</a>
    </div>
</nav>