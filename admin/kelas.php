<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_school";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT id_kelas, nama_kelas, kompetensi_keahlian FROM db_spp_kelas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #fff 0%, #d0e8ff 60%, #61a4ff 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', 'Arial', sans-serif;
        }

        .card {
            border: 2.5px solid #61a4ff;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 #61a4ff33;
            animation: popIn 0.8s cubic-bezier(.68, -0.55, .27, 1.55);
        }

        @keyframes popIn {
            0% {
                transform: scale(0.95) translateY(40px);
                opacity: 0;
            }

            100% {
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        .table {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 4px 24px #61a4ff22;
            animation: fadeInTable 1s;
        }

        @keyframes fadeInTable {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .table thead th {
            background: linear-gradient(90deg, #61a4ff 60%, #b3d9ff 100%);
            color: #fff;
            border: none;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: #f0f8ff;
        }

        .table-striped>tbody>tr:nth-of-type(even) {
            background-color: #ffffff;
        }

        .table tbody tr:hover {
            background: #dff0ff !important;
            transition: background 0.2s;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .btn-merah,
        .btn-danger {
            background: #61a4ff !important;
            color: #fff !important;
            border: none;
            border-radius: 6px;
            font-family: inherit;
            font-weight: 500;
            letter-spacing: 0.5px;
            box-shadow: none;
            transition: background 0.15s, transform 0.12s;
        }

        .btn-merah:hover,
        .btn-danger:hover {
            background: #2f7ad3 !important;
            color: #fff !important;
            transform: scale(1.04);
        }

        h2 {
            color: #2f7ad3;
            text-shadow: 1px 1px 0 #b3d9ff, 2px 2px 0 #fff;
            letter-spacing: 1px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="card p-4">
            <h2 class="mb-4 text-center">Data Kelas</h2>
            <div class="mb-3 text-end">
                <a href="?url=tambah-kelas" class="btn btn-merah">+ Tambah Kelas</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Komptensi Keahlian</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result && $result->num_rows > 0) {
                            $no = 1;
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                <td>{$no}</td>
                                <td>{$row['nama_kelas']}</td>
                                <td>{$row['kompetensi_keahlian']}</td>
                                <td><a href='?url=edit-kelas&id_kelas={$row['id_kelas']}' class='btn btn-merah btn-sm'>Edit</a></td>
                                <td><a href='?url=hapus-kelas&id_kelas={$row['id_kelas']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</a></td>
                            </tr>";
                                $no++;
                            }
                        } else {
                            echo "<tr><td colspan='7' class='text-center'>Data tidak ditemukan.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

<?php
$conn->close();
?>