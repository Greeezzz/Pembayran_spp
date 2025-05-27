<?php
session_start();
if (empty($_SESSION['id_petugas'])) {
    echo "<script>
        alert('Maaf Anda Belum Login. Silakan login kembali.');
        window.location.assign('../index2.php');
    </script>";
    exit;
}
if ($_SESSION['level'] != 'admin') {
    echo "<script>
        alert('Maaf, Anda tidak memiliki akses sebagai admin.');
        window.location.assign('../index2.php');
    </script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Pembayaran SPP</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #fff 0%, #d0eaff 60%, #007bff 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', 'Arial', sans-serif;
        }

        .navbar {
            background: linear-gradient(90deg, #007bff 0%, #71c9f8 100%);
        }

        .nav-link {
            color: #fff !important;
            position: relative;
            font-weight: 500;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 4px;
            width: 100%;
            height: 2px;
            background: #b3e0ff;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }

        .nav-link:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        header.bg-info {
            background: linear-gradient(90deg, #007bff 0%, #71c9f8 100%) !important;
        }

        .card {
            border: 2.5px solid #007bff;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 #007bff33;
        }

        .footer {
            background: #e6f2ff;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm mb-2">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="admin.php">SPP Admin</a>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav ms-auto">
                    <a href="admin.php?url=spp" class="nav-link px-3 menu-link"><i class="bi bi-cash-coin me-1"></i> SPP</a>
                    <a href="admin.php?url=kelas" class="nav-link px-3 menu-link"><i class="bi bi-building me-1"></i> Kelas</a>
                    <a href="admin.php?url=siswa" class="nav-link px-3 menu-link"><i class="bi bi-people me-1"></i> Siswa</a>
                    <a href="admin.php?url=petugas" class="nav-link px-3 menu-link"><i class="bi bi-person-badge me-1"></i> Petugas</a>
                    <a href="admin.php?url=pembayaran" class="nav-link px-3 menu-link"><i class="bi bi-wallet2 me-1"></i> Pembayaran</a>
                    <a href="admin.php?url=laporan" class="nav-link px-3 menu-link"><i class="bi bi-file-earmark-bar-graph me-1"></i> Laporan</a>
                    <a href="admin.php?url=logout" class="nav-link px-3 menu-link fw-bold"><i class="bi bi-box-arrow-right me-1"></i> Log Out</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Welcome Message -->
    <header class="bg-info text-white py-4 mb-4 text-center">
        <div class="container">
            <h3 class="fw-bold">Aplikasi Pembayaran SPP</h3>
            <p class="mb-0">Selamat datang, <strong>Administrator</strong></p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h5 class='fw-semibold mb-3'>Dashboard Admin</h5>";
                    echo "<p class='text-muted'>Gunakan menu navigasi untuk mengelola data pembayaran siswa, petugas, kelas, dan lainnya.</p>";
                } else {
                    include $file . '.php';
                }
                ?>
            </div>
        </div>
    </main>

    <!-- Sticky Footer -->
    <footer class="footer text-center py-3 border-top mt-auto">
        <small class="text-muted">&copy; <?= date("Y") ?> Aplikasi Pembayaran SPP. Dibuat dengan ❤️</small>
    </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons CDN (for menu icons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>

</html>