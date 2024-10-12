<?php
require_once '../connection.php'; // File koneksi

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['logo_image'])) {
    $target_dir = "../../../uploads/";
    $file_name = basename($_FILES["logo_image"]["name"]);
    $target_file = $target_dir . $file_name;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file gambar
    $check = getimagesize($_FILES["logo_image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<script>alert('File bukan gambar!'); window.location.href = '../settings.php';</script>";
        $uploadOk = 0;
    }

    // Batasi jenis file
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "<script>alert('Hanya file JPG, JPEG, PNG yang diperbolehkan!'); window.location.href = '../settings.php';</script>";
        $uploadOk = 0;
    }

    // Jika tidak ada masalah
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["logo_image"]["tmp_name"], $target_file)) {
            // Simpan nama file ke database
            $logo_image_path = $file_name;
            $sql = "INSERT INTO logo (logo_image_path) VALUES ('$logo_image_path')";

            if ($conn->query($sql) === TRUE) {
                // Tampilkan popup alert dan refresh halaman
                echo "<script>
                    alert('Logo berhasil di-upload dan disimpan!');
                    window.location.href = '../../settings.php';
                </script>";
            } else {
                echo "<script>alert('Error saat menyimpan data ke database!'); window.location.href = '../../settings.php';</script>";
            }
        } else {
            echo "<script>alert('Terjadi kesalahan saat meng-upload file!'); window.location.href = '../../settings.php';</script>";
        }
    }
}
