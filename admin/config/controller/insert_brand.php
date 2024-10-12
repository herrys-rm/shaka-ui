<?php
require_once '../connection.php'; // File koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title_name = mysqli_real_escape_string($conn, $_POST['title_name']); // Hindari SQL Injection

    // Cek apakah title sudah ada
    $sql_check = "SELECT id FROM title ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql_check);

    if ($result && $result->num_rows > 0) {
        // Ambil id dari title terakhir
        $row = $result->fetch_assoc();
        $last_id = $row['id'];

        // Jika title sudah ada, lakukan update
        $sql_update = "UPDATE title SET title_name = '$title_name' WHERE id = $last_id";
        $conn->query($sql_update);
    } else {
        // Jika belum ada, lakukan insert
        $sql_insert = "INSERT INTO title (title_name) VALUES ('$title_name')";
        $conn->query($sql_insert);
    }

    if ($conn->affected_rows > 0) {
        echo "<script>
                alert('Title berhasil diperbarui!');
                window.location.href = '../../brand.php'; // Ganti dengan halaman yang sesuai
              </script>";
    } else {
        echo "Error: Tidak ada perubahan pada title.";
    }

    $conn->close();
}
