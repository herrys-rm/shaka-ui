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

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <img src="<?php echo $logo_path; ?>" alt="Logo">
            <h1 class="sitename"><?php echo $title_name; ?></h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.php" class="<?php if ($current_page == 'index.php') {
                                                    echo 'active';
                                                } ?>">Beranda</a></li>
                <li><a href="tentang-selengkapnya.php" class="<?php if ($current_page == 'tentang-selengkapnya.php') {
                                                                    echo 'active';
                                                                } ?>">Tentang</a></li>
                <li><a href="https://www.instagram.com/syakadesign21/" class="<?php if ($current_page == 'portofolio.php') {
                                                                                    echo 'active';
                                                                                } ?>">Portfolio</a></li>
                <li><a href="contact.php" class="<?php if ($current_page == 'contact.php') {
                                                        echo 'active';
                                                    } ?>">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="chat_wa.php">WhatsApp</a>

    </div>
</header>