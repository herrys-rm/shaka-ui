document.getElementById("upload_form").addEventListener("submit", function (event) {
  event.preventDefault(); // Mencegah submit form default

  var formData = new FormData(this);

  fetch("./config/controller/insert_portfolio.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      if (data.includes("success")) {
        // Gambar baru diupload berhasil
        alert("Image successfully uploaded!");
        location.reload();
      } else {
        alert("Error uploading image");
      }
    })
    .catch((error) => console.log("Error:", error));
});
