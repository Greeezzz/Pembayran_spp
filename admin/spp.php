<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_school";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data SPP
$sql = "SELECT id_spp, nama, kelas, tahun, nominal FROM db_spp_spp";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data SPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #fff 0%, #ffdde1 60%, #ff6161 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', 'Arial', sans-serif;
        }

        .card {
            border: 2.5px solid #ff6161;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 #ff616133;
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
            box-shadow: 0 4px 24px #ff616122;
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
            background: linear-gradient(90deg, #ff6161 60%, #ffb3b3 100%);
            color: #fff;
            border: none;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: #fff6f6;
        }

        .table-striped>tbody>tr:nth-of-type(even) {
            background-color: #fff;
        }

        .table tbody tr:hover {
            background: #ffeaea !important;
            transition: background 0.2s;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .btn-merah {
            background: linear-gradient(90deg, #ff6161 60%, #ffb3b3 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-family: inherit;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px #ff616133;
            transition: transform 0.15s, box-shadow 0.15s, background 0.2s;
        }

        .btn-merah:hover {
            transform: scale(1.05);
            background: linear-gradient(90deg, #ffb3b3 60%, #ff6161 100%);
            color: #d32f2f;
        }

        .btn-danger {
            /* biar serasi juga */
            background: linear-gradient(90deg, #ff6161 60%, #ffb3b3 100%) !important;
            border: none;
        }

        .btn-danger:hover {
            background: linear-gradient(90deg, #ffb3b3 60%, #ff6161 100%) !important;
            color: #d32f2f !important;
            transform: scale(1.05);
        }

        h2 {
            color: #d32f2f;
            text-shadow: 1px 1px 0 #ffb3b3, 2px 2px 0 #fff;
            letter-spacing: 1px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="card p-4">
            <h2 class="mb-4 text-center">Data SPP</h2>
            <div class="mb-3 text-end">
                <a href="?url=tambah-spp" class="btn btn-merah">+ Tambah SPP</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas / Jurusan</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
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
                                <td>{$row['nama']}</td>
                                <td>{$row['kelas']}</td>
                                <td>{$row['tahun']}</td>
                                <td>Rp " . number_format($row['nominal'], 0, ',', '.') . "</td>
                                <td><a href='?url=edit-spp&id_spp={$row['id_spp']}' class='btn btn-merah btn-sm'>Edit</a></td>
                                <td><a href='?url=hapus-spp&id_spp={$row['id_spp']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</a></td>
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