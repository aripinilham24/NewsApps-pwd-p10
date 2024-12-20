<?php
include '../koneksi.php';
$kdberita = $_POST['kdberita'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$vfoto = $_FILES['fupload']['name'];
$tfoto = $_FILES['fupload']['tmp_name'];
$dir = "../foto_berita/";

$penulis = $_POST['penulis'];
$simpan = mysqli_query($conn, "UPDATE tb_berita SET judul = '$judul', isiBerita = '$isi', gambar = '$vfoto', penulis = '$penulis' WHERE nomor = '$kdberita'");
$upload = $dir . $vfoto;
move_uploaded_file($tfoto, $upload);
echo '<script>alert("Data berhasil diedit!"); window.location.href=\'index.php\';</script>';
?>