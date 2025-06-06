<?php
include '../koneksi.php';

if (!isset($_GET['id_spp'])) {
    echo "<script>alert('ID SPP tidak ditemukan!'); window.location.href='?url=spp';</script>";
    exit;
}

$id_spp = $_GET['id_spp'];
$sql = "SELECT * FROM db_spp_spp WHERE id_spp = '$id_spp'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit SPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffffff 0%, #d0e6ff 60%, #007bff 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', 'Arial', sans-serif;
        }

        .card {
            border: 2.5px solid #007bff;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 #007bff33;
            animation: popIn 0.8s cubic-bezier(.68, -0.55, .27, 1.55);
            margin: 0 auto;
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

        .card-header {
            background: linear-gradient(90deg, #007bff 60%, #66b3ff 100%);
            color: #fff;
            border-bottom: 2px solid #007bff;
            border-radius: 14px 14px 0 0;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .form-label {
            color: #004c99;
            font-weight: 500;
        }

        .form-control {
            background: #f0f8ff;
            color: #004c99;
            border: 2px solid #a3d1ff;
            border-radius: 8px;
            font-family: inherit;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 2px #007bff22;
            background: #e6f2ff;
            color: #004c99;
        }

        .btn-biru {
            background: linear-gradient(90deg, #007bff 60%, #66b3ff 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-family: inherit;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px #007bff33;
            transition: transform 0.15s, box-shadow 0.15s, background 0.2s;
        }

        .btn-biru:hover {
            transform: scale(1.05);
            background: linear-gradient(90deg, #66b3ff 60%, #007bff 100%);
            color: #004c99;
        }

        .btn-outline-merah {
            border: 2px solid #007bff;
            color: #007bff;
            background: #fff;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.2s, color 0.2s, transform 0.15s;
        }

        .btn-outline-merah:hover {
            background: #007bff;
            color: #fff;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="card shadow-lg">
            <div class="card-header text-center">
                <h4 class="mb-0">Form Edit SPP</h4>
            </div>
            <div class="card-body">
                <a href="?url=spp" class="btn btn-outline-merah mb-3">← Kembali</a>
                <form action="?url=proses-edit-spp" method="post">
                    <input type="hidden" name="id_spp" value="<?= $data['id_spp'] ?>">
                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama SPP</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= htmlspecialchars($data['nama']) ?>" required maxlength="50">
                    </div>
                    <div class="form-group mb-3">
                        <label for="klsjurusan" class="form-label">Kelas/Jurusan</label>
                        <input type="text" name="klsjurusan" class="form-control" id="klsjurusan" value="<?= htmlspecialchars($data['klsjurusan']) ?>" required maxlength="50">
                    </div>
                    <div class="form-group mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="number" name="tahun" class="form-control" id="tahun" value="<?= htmlspecialchars($data['tahun']) ?>" required maxlength="4">
                    </div>
                    <div class="form-group mb-4">
                        <label for="nominal" class="form-label">Nominal</label>
                        <input type="number" name="nominal" class="form-control" id="nominal" value="<?= htmlspecialchars($data['nominal']) ?>" required maxlength="15">
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-merah">💾 Update</button>
                        <a href="?url=spp" class="btn btn-outline-merah">🔄 Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>