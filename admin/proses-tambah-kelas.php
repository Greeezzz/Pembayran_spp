<?php

$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['komptensi_keahlian'];

include '../koneksi.php';
$sql = "INSERT INTO db_spp_kelas (nama_kelas, kompetensi_keahlian) VALUES ('$nama_kelas', '$kompetensi_keahlian')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    echo "<script>alert('Data Kelas berhasil ditambahkan'); window.location.href='?url=kelas';</script>";
} else {
    echo "<script>alert('Data Kelas gagal ditambahkan'); window.location.href='?url=tambah-kelas';</script>";
}
