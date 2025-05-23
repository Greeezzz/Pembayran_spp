<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Petugas/Admin</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #fff 0%, #ffdde1 60%, #ff6161 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', 'Arial', sans-serif;
        }

        .card {
            background: #fff;
            border: 2.5px solid #ff6161;
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 #ff616133;
            overflow: hidden;
            max-width: 28rem;
            width: 100%;
            animation: popIn 0.8s cubic-bezier(.68, -0.55, .27, 1.55);
        }

        @keyframes popIn {
            0% {
                transform: scale(0.9) translateY(40px);
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
            background: #fff0f0;
            border-bottom: 2px solid #ff6161;
        }

        .form-container {
            padding: 2rem 2rem 1.5rem 2rem;
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
            transition: transform 0.15s, box-shadow 0.15s;
        }

        .btn-merah:hover {
            transform: scale(1.04);
            box-shadow: 0 4px 16px #ff616144;
            background: linear-gradient(90deg, #ffb3b3 60%, #ff6161 100%);
            color: #d32f2f;
        }

        .text-merah {
            font-family: 'Segoe UI', 'Arial', sans-serif;
            color: #d32f2f;
            text-shadow: 1px 1px 0 #ffb3b3, 2px 2px 0 #fff;
            letter-spacing: 2px;
        }

        .link-merah {
            color: #d32f2f;
            text-decoration: underline;
            font-size: 0.95em;
            transition: color 0.2s;
        }

        .link-merah:hover {
            color: #ff6161;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow">
        <!-- Banner -->
        <img src="image/Banner.png" alt="Logo Jurusan" class="banner">

        <!-- Form Login -->
        <div class="form-container">
            <h3 class="text-center text-merah mb-4">LOGIN PETUGAS / ADMIN</h3>
            <form action="proses-login-petugas.php" method="POST">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username anda" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password anda" required>
                </div>
                <button type="submit" class="btn btn-merah w-100">Login</button>
            </form>
            <div class="text-center mt-3">
                <a href="index.php" class="link-merah">Login sebagai Siswa</a>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>

</html>