<?php
include "koneksi.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['inputEmail'];
    $username = $_POST['userName'];
    $peran = $_POST['peran'];
    $password = $_POST['inputPassword'];
    $simpan = mysqli_query($conn, "INSERT into tb_pengguna(nama_pengguna, email, kata_sandi, peran) values ('$username', '$email', '$password', '$peran')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <h1 class="text-center">Sign Up</h1>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" name="inputEmail" id="inputEmail" aria-describedby="emailHelp"
                    required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="userName" class="form-label">User Name</label>
                <input type="text" class="form-control" name="userName" id="userName" required>
            </div>
            <div class="mb-3">
                <label for="peran" class="form-label">Pilih Peran</label>
                <select class="form-select" aria-label="Default select example" name="peran" id="peran" required>
                    <option selected disabled>Pilih Peran</option>
                    <option value="penulis">Penulis</option>
                    <option value="admin">Admin</option>
                    <option value="pembaca">Pembaca</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="inputPassword" id="inputPassword" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
        </form>
    </div>
</body>
</html>