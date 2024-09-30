<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-compatibe" content="IE=edge" />
    <meta name="viewport" charset="width=device-width, initial-scale=1.0" />
    <title>form Redirect to WhatsApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-dark mb-5">
                    PAKET BASIC
                </h1>

                <form onsubmit="sendMessage()">
                    <div class="mb-3">
                        <label for="name">Nama</label>
                        <input type="text" id="name" palaceholder="Your Name" class="form-control shadow-none" required>

                    </div>
                    <div class="mb-3">
                        <label for="email">Alamat</label>
                        <input type="text" id="email" palaceholder="Email Address" class="form-control shadow-none" required>

                    </div>
                    <div class="mb-3">
                        <label for="message">Pesan Anda</label>
                        <textarea id="message" cols="30" rows="3" class="form-control shadow-none" required></textarea>

                    </div>
                    <a href="index.php" class="btn btn-danger"><span>Kembali</span><i></i></a>
                    <button class="btn btn-success px-4" type="submit">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function sendMessage() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            const url = "https://web.whatsapp.com/send?phone=6285339913626&text=Hallo%20Syaka%20Desain%20Konstruksi%0APAKET%20BASIC%0ASaya%20*" + name + "*%0AAlamat%20*" + email + "*%0A%0A*" + message + "*";

            window.open(url);

        }
    </script>
</body>


</html>