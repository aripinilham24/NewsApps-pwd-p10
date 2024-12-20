<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="card p-4 shadow" style="width: 400px;">
      <h1 class="text-center">LOGIN</h1>
      <?php
      if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
          echo "<div class='alert alert-danger'>Login Gagal! Username dan Password Salah.</div>";
        } else if ($_GET['pesan'] == "logout") {
          echo "<div class='alert alert-info'>Anda telah berhasil logout.</div>";
        } else if ($_GET['pesan'] == "belum_login") {
          echo "<div class='alert alert-warning'>Anda harus login untuk mengakses halaman admin.</div>";
        }
      }
      ?>
      <form method="post" action="login.php">
        <div class="mb-3">
          <label for="inputEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" name="inputEmail" id="inputEmail" required>
        </div>
        <div class="mb-3">
          <label for="inputPassword" class="form-label">Password</label>
          <input type="password" class="form-control" name="inputPassword" id="inputPassword" required>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Sign In</button>
          <a href="signUp.php" class="btn btn-primary">Sign Up</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>