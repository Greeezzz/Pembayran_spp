<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffffff 0%, #d6ecfa 60%, #3498db 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', 'Arial', sans-serif;
        }

        .card {
            border: 2.5px solid #3498db;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 #3498db33;
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
            background: linear-gradient(90deg, #3498db 60%, #a9d6f5 100%);
            color: #fff;
            border-bottom: 2px solid #3498db;
            border-radius: 14px 14px 0 0;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .form-label {
            color: #2c3e50;
            font-weight: 500;
        }

        .form-control {
            background: #ebf5fb;
            color: #2c3e50;
            border: 2px solid #a9d6f5;
            border-radius: 8px;
            font-family: inherit;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 2px #3498db33;
            background: #eaf3fb;
            color: #2c3e50;
        }

        .btn-merah {
            background: linear-gradient(90deg, #3498db 60%, #a9d6f5 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-family: inherit;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px #3498db33;
            transition: transform 0.15s, box-shadow 0.15s, background 0.2s;
        }

        .btn-merah:hover {
            transform: scale(1.05);
            background: linear-gradient(90deg, #a9d6f5 60%, #3498db 100%);
            color: #2c3e50;
        }

        .btn-outline-merah {
            border: 2px solid #3498db;
            color: #3498db;
            background: #fff;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.2s, color 0.2s, transform 0.15s;
        }

        .btn-outline-merah:hover {
            background: #3498db;
            color: #fff;
            transform: scale(1.05);
        }
    </style>

</head>

<body>
    <div class="container py-5">
        <div class="card shadow-lg">
            <div class="card-header text-center">
                <h4 class="mb-0">Form Tambah Kelas</h4>
            </div>
            <div class="card-body">
                <a href="?url=kelas" class="btn btn-outline-merah mb-3">← Kembali</a>
                <form action="?url=proses-tambah-kelas" method="post">
                    <div class="form-group mb-3">
                        <label for="nama_kelas" class="form-label">Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" placeholder="Masukkan nama Kelas" required maxlength="50">
                    </div>
                    <div class="form-group mb-3">
                        <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                        <input type="text" name="kompetensi_keahlian" class="form-control" id="kompetensi_keahlian" placeholder="Masukkan kompetensi keahlian" required maxlength="50">
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