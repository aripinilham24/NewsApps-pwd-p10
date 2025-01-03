<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php
    $sql = mysqli_query($conn, "SELECT * FROM tb_berita order by nomor asc");
    ?>

    <div class="container">
        <h1 class="display-5">DAFTAR BERITA</h1>
        <p>Berikut ini adalah daftar berita yang paling populer.</p>

        <input type="button" value="Add Berita" onClick="document.location='addBerita.php'"
            class="btn btn-primary btn-sm"><br><br>

        <div class="table-responsive-sm">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Gambar</th>
                        <th>Penulis</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <?php
                $i = 1;
                while ($data = mysqli_fetch_array($sql)) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $data['judul'] ?></td>
                            <td><?php echo $data['isiBerita'] ?></td>
                            <td><?php echo "<img src='../foto_berita/$data[gambar]' width=100 height=100" ?></td>
                            <td><?php echo $data['penulis'] ?></td>

                            <td width="20%">
                                <a href="edit_berita.php?kdberita=<?php echo $data['nomor']; ?>">
                                    <input type="button" value="Edit" class="btn btn-outline-warning btn-sm"></a>
                                <a href="hapus_berita.php?kdhapus=<?php echo $data['nomor']; ?>">
                                    <input type="button" value="Hapus" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')"></a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                    $i++;
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>