<?php
include "koneksi.php";
$email = $_POST['inputEmail'];
$username = $_POST['userName'];
$peran = $_POST['peran'];
$password = $_POST['inputPassword'];
$simpan = mysqli_query($koneksi, "INSERT into tb_pengguna(nama_pengguna, email, kata_sandi, peran) values ('$username', '$email', '$password', '$peran')");
?>