<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_school');

if (!$koneksi) {
    echo "Koneksi gagal: " . mysqli_connect_error();
}

if ($koneksi) {
    echo "Koneksi berhasil";
}
