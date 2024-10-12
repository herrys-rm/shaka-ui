$(document).ready(function () {
  // Handle delete button click
  $(".delete-image").on("click", function () {
    var imageId = $(this).data("id"); // Ambil ID dari gambar
    var confirmation = confirm("Apakah kamu yakin ingin menghapus gambar ini?");

    if (confirmation) {
      $.ajax({
        url: "./config/controller/delete_image.php", // File PHP untuk menangani penghapusan
        type: "POST",
        data: {
          id: imageId,
        },
        success: function (response) {
          if (response.trim() === "success") {
            alert("Gambar berhasil dihapus.");
            location.reload(); // Reload halaman untuk menampilkan gambar yang sudah diperbarui
          } else {
            alert("Error: " + response);
          }
        },
        error: function () {
          alert("Error saat menghapus gambar.");
        },
      });
    }
  });
});
