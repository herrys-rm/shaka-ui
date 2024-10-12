<?php

session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: ./');  // Redirect ke halaman login jika belum login
    exit;
}
