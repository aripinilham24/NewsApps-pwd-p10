<?php
session_start();
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];



    $query = $conn->prepare("SELECT * FROM tb_pengguna WHERE email = ? AND kata_sandi = ?");
    $query->bind_param('ss', $email, $password);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        
        $_SESSION['username'] = $user['nama_pengguna'];
        $_SESSION['peran'] = $user['peran'];
        $_SESSION['status'] = "login";

        
        switch ($_SESSION['peran']) {
            case 'admin':
                header("Location: tampilanAdmin/index.php");
                break;
            case 'penulis':
                header("Location: tampilanPenulis/index.php");
                break;
            case 'pembaca':
                header("Location: tampilanUser/index.php");
                break;
            default:
                header("Location: index.php?pesan=peran_tidak_dikenal");
                break;
        }
        exit(); 
    } else {
        header("location:index.php?pesan=gagal");
        exit(); 
    }
}
?>