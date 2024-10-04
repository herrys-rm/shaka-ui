<?php
require_once 'config/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $image_title = mysqli_real_escape_string($conn, $_POST['image_title']);
    $img_desc = mysqli_real_escape_string($conn, $_POST['img_desc']);

    // Proses upload file gambar
    $target_dir = "uploads/";
    $image = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check apakah file adalah gambar
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        exit;
    }

    // Cek jika file berhasil diupload ke direktori
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Jika berhasil upload, masukkan data ke database
        $sql = "INSERT INTO portfolio (image, image_title, img_desc) 
                VALUES ('$image', '$image_title', '$img_desc')";

        if ($conn->query($sql) === TRUE) {
            echo "success"; // Kirim respons sukses ke AJAX
        } else {
            echo "Database error: " . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $conn->close();
}
