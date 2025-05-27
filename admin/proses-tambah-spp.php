<?php

$nama = $_POST['nama'];
$kelas = $_POST['klsjurusan'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

include '../koneksi.php';
$sql = "INSERT INTO db_spp_spp (nama, klsjurusan, tahun, nominal) VALUES ('$nama', '$kelas', '$tahun', '$nominal')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    echo "<script>alert('Data SPP berhasil ditambahkan'); window.location.href='?url=spp';</script>";
} else {
    echo "<script>alert('Data SPP gagal ditambahkan'); window.location.href='?url=tambah-spp';</script>";
}
