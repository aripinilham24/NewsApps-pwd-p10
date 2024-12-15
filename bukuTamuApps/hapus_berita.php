<?php
include "koneksi.php";
$kdhapus = $_GET["kdhapus"];
mysqli_query($koneksi, "DELETE FROM tb_berita WHERE nomor=$kdhapus");
echo '<script>alert("Data berhasil dihapus!"); window.location.href=\'tampil_berita.php\';</script>';
?>