<?php
require_once 'config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $image_id = $_POST['id'];

    // Ambil data gambar dari database
    $sql = "SELECT image FROM portfolio WHERE id = $image_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $image_path = 'uploads/' . $row['image'];

        // Hapus file gambar dari direktori
        if (file_exists($image_path)) {
            if (unlink($image_path)) {
                // Jika file berhasil dihapus, hapus data dari database
                $sql_delete = "DELETE FROM portfolio WHERE id = $image_id";
                if ($conn->query($sql_delete) === TRUE) {
                    echo "success"; // Kirim respons sukses ke AJAX
                } else {
                    echo "Error deleting record: " . $conn->error;
                }
            } else {
                echo "Error deleting file.";
            }
        } else {
            echo "File not found.";
        }
    } else {
        echo "Record not found.";
    }

    $conn->close();
}
