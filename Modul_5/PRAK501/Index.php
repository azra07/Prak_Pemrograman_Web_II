<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang - TimaLibrary</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url('bgpurple.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        }
        body::before {
            content: "";
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(243, 229, 245, 0.7);
            z-index: -1;
        }
        .hero {
            background-color: #ffffff;
            padding: 50px;
            border-radius: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 600px;
        }
        h1 { color: #8f4fa5; font-family: 'Copperplate', serif; }
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }
        .btn-menu {
            padding: 20px;
            background-color: #a678d4;
            color: white;
            text-decoration: none;
            border-radius: 20px;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-menu:hover {
            background-color: #8f4fa5;
            transform: translateY(-5px);
            color: white;
        }
    </style>
</head>
<body>

    <div class="hero">
        <h1>TimaLibrary</h1>
        <p>Sistem Informasi Perpustakaan Digital</p>
        <hr>
        <p>Silakan pilih menu untuk mengelola data perpustakaan:</p>
        
        <div class="menu-grid">
            <a href="Buku.php" class="btn-menu">Buku</a>
            <a href="Member.php" class="btn-menu">Member</a>
            <a href="Peminjaman.php" class="btn-menu">Peminjaman</a>
        </div>
    </div>
</body>
</html>