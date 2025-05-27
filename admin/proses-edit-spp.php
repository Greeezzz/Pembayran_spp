<?php

$id_spp = $_POST['id_spp'];
$nama = $_POST['nama'];
$kelas = $_POST['klsjurusan'];
$tahun  = $_POST['tahun'];
$nominal = $_POST['nominal'];

include '../koneksi.php';
$sql = "UPDATE db_spp_spp SET nama='$nama', klsjurusan='$kelas', tahun='$tahun', nominal='$nominal' WHERE id_spp='$id_spp'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Data SPP berhasil diupdate'); window.location.href='?url=spp';</script>";
} else {
    echo "<script>alert('Data SPP gagal diupdate'); window.location.href='?url=edit-spp&id_spp=$id_spp';</script>";
}
