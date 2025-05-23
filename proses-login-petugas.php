<?php

$username = $_POST['username'];
$password = $_POST['password'];

include 'koneksi.php';
$sql = "SELECT * FROM db_spp_petugas WHERE username='$username' AND password='$password'";
$query = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($query) > 0) {
    session_start();
    $data = mysqli_fetch_array($query);
    $_SESSION['id_petugas'] = $data['id_petugas'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];

    if ($data['level'] == 'admin') {
        header("location: admin/admin.php");
    } else if ($data['level'] == 'petugas') {
        header("location: petugas/petugas.php");
    }
} else {
    echo "<script>
    alert('Username atau Password salah!'); 
    window.location.href='index2.php';</script>";
}
