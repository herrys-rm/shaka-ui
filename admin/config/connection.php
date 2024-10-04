<?php
$host = 'localhost';
$dbname = 'saka_design';  // Ganti dengan nama database kamu
$username_db = 'root';  // Ganti dengan username database kamu
$password_db = '';  // Ganti dengan password database kamu

// Koneksi ke database menggunakan MySQLi
$conn = mysqli_connect($host, $username_db, $password_db, $dbname);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
