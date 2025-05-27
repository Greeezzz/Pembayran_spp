<?php
include '../koneksi.php';

if (!isset($_GET['id_kelas'])) {
    echo "<script>alert('ID SPP tidak ditemukan!'); window.location.href='?url=spp';</script>";
    exit;
}

$id_kelas = $_GET['id_kelas'];
$sql = "DELETE FROM db_spp_kelas WHERE id_kelas = '$id_kelas'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Data Kelas berhasil dihapus!'); window.location.href='?url=kelas';</script>";
} else {
    echo "<script>alert('Data Kelas gagal dihapus!'); window.location.href='?url=kelas';</script>";
}
