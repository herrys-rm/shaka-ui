<?php
// Ambil nama file dari URL saat ini
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>

            <!-- Tambahkan kelas 'active' berdasarkan halaman yang aktif -->
            <a class="nav-link <?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>" href="dashboard.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Interface</div>

            <a class="nav-link <?php echo ($current_page == 'settings.php' || $current_page === 'brand.php' || $current_page === 'gallery.php') ? 'active' : ''; ?>" href="settings.php">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                Settings
            </a>

            <a class="nav-link <?php echo ($current_page == 'tables.html') ? 'active' : ''; ?>" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Tables
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>