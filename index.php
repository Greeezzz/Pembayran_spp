<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Siswa - SPP</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e3f0ff 0%, #b6d0f7 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', 'Arial', sans-serif;
        }

        .card {
            background: #fff;
            border: 2.5px solid #1976d2;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 #1976d255;
            overflow: hidden;
            max-width: 28rem;
            width: 100%;
            animation: popIn 0.8s cubic-bezier(.68, -0.55, .27, 1.55);
        }

        @keyframes popIn {
            0% {
                opacity: 0;
            }

            100% {
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        .banner {
            width: 100%;
            height: 180px;
            object-fit: cover;
            background: #e3f0ff;
            border-bottom: 2px solid #1976d2;
        }

        .form-container {
            padding: 2rem 2rem 1.5rem 2rem;
        }

        .form-control {
            background: #f4f8fb;
            color: #1976d2;
            border: 2px solid #64b5f6;
            border-radius: 8px;
            font-family: inherit;
        }

        .form-control:focus {
            border-color: #1976d2;
            box-shadow: 0 0 0 2px #1976d233;
            background: #e3f0ff;
            color: #1976d2;
        }

        .btn-biru {
            background: linear-gradient(90deg, #1976d2 60%, #64b5f6 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-family: inherit;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px #1976d233;
            transition: transform 0.15s, box-shadow 0.15s;
        }

        .btn-biru:hover {
            transform: scale(1.04);
            box-shadow: 0 4px 16px #1976d244;
            background: linear-gradient(90deg, #64b5f6 60%, #1976d2 100%);
            color: #1976d2;
        }

        .text-biru {
            font-family: 'Segoe UI', 'Arial', sans-serif;
            color: #1976d2;
            text-shadow: 1px 1px 0 #64b5f6, 2px 2px 0 #e3f0ff;
            letter-spacing: 2px;
        }

        .link-biru {
            color: #1976d2;
            text-decoration: underline;
            font-size: 0.95em;
            transition: color 0.2s;
        }

        .link-biru:hover {
            color: #64b5f6;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow">
        <!-- Banner -->
        <img src="image/Banner.png" alt="Logo Jurusan" class="banner">

        <!-- Form Login -->
        <div class="form-container">
            <h3 class="text-center text-biru mb-4">LOGIN SISWA</h3>
            <form action="proses-login-siswa.php" method="POST">
                <div class="mb-3">
                    <input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN anda" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password anda" required>
                </div>
                <button type="submit" class="btn btn-biru w-100">Masuk</button>
            </form>
            <div class="text-center mt-3">
                <a href="index2.php" class="link-biru">Login sebagai Petugas / Administrator</a>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>

</html>