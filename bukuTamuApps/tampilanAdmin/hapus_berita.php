<?php
include "../koneksi.php";
$kdhapus = $_GET["kdhapus"];
mysqli_query($conn, "DELETE FROM tb_berita WHERE nomor=$kdhapus");
echo '<script>alert("Data berhasil dihapus!"); window.location.href=\'index.php\';</script>';
?>