<?php

$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

include '../koneksi.php';
$sql = "UPDATE db_spp_kelas SET nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Data SPP berhasil diupdate'); window.location.href='?url=kelas';</script>";
} else {
    echo "<script>alert('Data SPP gagal diupdate'); window.location.href='?url=edit-kelas&id_kelas=$id_kelas';</script>";
}
