<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah SPP</title>
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
            background: linear-gradient(90deg, #ff6161 60%, #ffb3b3 100%);
            color: #fff;
            border-bottom: 2px solid #ff6161;
            border-radius: 14px 14px 0 0;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .form-label {
            color: #d32f2f;
            font-weight: 500;
        }

        .form-control {
            background: #fff5f5;
            color: #d32f2f;
            border: 2px solid #ffb3b3;
            border-radius: 8px;
            font-family: inherit;
        }

        .form-control:focus {
            border-color: #ff6161;
            box-shadow: 0 0 0 2px #ff616122;
            background: #fff0f0;
            color: #d32f2f;
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

        .btn-outline-merah {
            border: 2px solid #ff6161;
            color: #ff6161;
            background: #fff;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.2s, color 0.2s, transform 0.15s;
        }

        .btn-outline-merah:hover {
            background: #ff6161;
            color: #fff;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="card shadow-lg">
            <div class="card-header text-center">
                <h4 class="mb-0">Form Tambah SPP</h4>
            </div>
            <div class="card-body">
                <a href="?url=spp" class="btn btn-outline-merah mb-3">← Kembali</a>
                <form action="?url=proses-tambah-spp" method="post">
                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama Siswa</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama siswa" required maxlength="50">
                    </div>
                    <div class="form-group mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukkan kelas siswa" required maxlength="50">
                    </div>
                    <div class="form-group mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="number" name="tahun" class="form-control" id="tahun" placeholder="Masukkan tahun SPP" required maxlength="4">
                    </div>
                    <div class="form-group mb-4">
                        <label for="nominal" class="form-label">Nominal</label>
                        <input type="number" name="nominal" class="form-control" id="nominal" placeholder="Masukkan nominal SPP" required maxlength="15">
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-merah">💾 Simpan</button>
                        <button type="reset" class="btn btn-outline-merah">🔄 Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>