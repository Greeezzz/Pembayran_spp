<?php
include '../koneksi.php';

if (!isset($_GET['id_spp'])) {
    echo "<script>alert('ID SPP tidak ditemukan!'); window.location.href='?url=spp';</script>";
    exit;
}

$id_spp = $_GET['id_spp'];
$sql = "DELETE FROM db_spp_spp WHERE id_spp = '$id_spp'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Data SPP berhasil dihapus!'); window.location.href='?url=spp';</script>";
} else {
    echo "<script>alert('Data SPP gagal dihapus!'); window.location.href='?url=spp';</script>";
}
