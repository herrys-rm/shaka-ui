<?php
// Mulai session
session_start();

// Konfigurasi database
require_once '../connection.php';

// Proses form login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Escape untuk menghindari SQL Injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query untuk mendapatkan data user berdasarkan username
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    // Cek apakah username ditemukan di database
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Bandingkan password yang diinput dengan password di database (plain text comparison)
        if (password_verify($password, $user['password'])) {
            // Jika login berhasil, simpan username di session
            $_SESSION['username'] = $user['username'];

            // Redirect ke dashboard atau halaman lain setelah login
            header('Location: ../../dashboard.php');
            exit;
        } else {
            // Password salah, simpan pesan error di session dan redirect kembali ke login
            $_SESSION['error'] = 'Password salah!';
            header('Location: ../../');
            exit;
        }
    } else {
        // Username tidak ditemukan, simpan pesan error di session dan redirect kembali ke login
        $_SESSION['error'] = 'Username tidak ditemukan!';
        header('Location: ../../');
        exit;
    }
}

// Tutup koneksi
mysqli_close($conn);
