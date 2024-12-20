<?php
$conn = new mysqli('localhost', 'root', '', 'db_berita');
if ($conn->connect_error)
    die('koneksi gagal:' . $conn->connect_error);
?>