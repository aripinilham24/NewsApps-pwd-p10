<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include "../koneksi.php";
    session_start();
    $sql = mysqli_query($conn, "SELECT * FROM tb_berita order by nomor asc");
    ?>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo "{$_SESSION['username']} ({$_SESSION['peran']})"; ?></a>
            <a href="" class="text-decoration-none text-dark">Log Out <img width="20" height="20"
                    src="https://img.icons8.com/ios/50/exit.png" alt="exit" /></a>
        </div>
    </nav>
    <div class="container">
        <h1 class="display-5">DAFTAR BERITA</h1>
        <p>Berikut ini adalah daftar berita yang paling populer.</p>
        <hr>

        <?php
        $i = 1;
        while ($data = mysqli_fetch_array($sql)) {
            ?>
            <h5>Penulis: <?php echo $data['penulis'] ?></h5>
            <h1><?php echo $data['judul'] ?></h1>
            <div><?php echo "<img src='../foto_berita/$data[gambar]' width=100 height=100" ?></div>
            <p><?php echo $data['isiBerita'] ?></p>
            <button class="btn btn-outline-secondary"><img class="me-2" width="15" height="15"
                    src="https://img.icons8.com/pastel-glyph/128/comments.png" alt="comments" />Komentar</button>
            <hr>
            <?php $i++;
        } ?>
    </div>
</body>

</html>