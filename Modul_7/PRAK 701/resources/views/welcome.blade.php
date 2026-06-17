<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library - Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 1px;
        }
        .hero-section {
            padding: 100px 0;
        }
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        .btn-custom {
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        .btn-login {
            background-color: #ff9f43;
            color: #fff;
            box-shadow: 0 4px 15px rgba(255, 159, 67, 0.4);
        }
        .btn-login:hover {
            background-color: #ff8c1a;
            transform: translateY(-3px);
            color: #fff;
        }
        .btn-outline-custom {
            border: 2px solid #ffffff;
            color: #ffffff;
        }
        .btn-outline-custom:hover {
            background-color: #ffffff;
            color: #1e3c72;
            transform: translateY(-3px);
        }
        .features-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 30px;
            transition: all 0.3s ease;
        }
        .features-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent pt-4">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="bi bi-book-half me-2"></i>E-LIBRARY</a>
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-outline-light px-4 rounded-pill">Masuk</a>
            </div>
        </div>
    </nav>

    <main class="container my-auto hero-section">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1 class="hero-title">Kelola Data Perpustakaan Anda Dengan Mudah</h1>
                <p class="lead mb-4 text-white-50">Sistem manajemen perpustakaan modern untuk pencatatan, pembaruan, dan pengelolaan buku dengan mudah.</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('login') }}" class="btn btn-custom btn-login"><i class="bi bi-box-arrow-in-right me-2"></i>Mulai Sekarang</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="features-card text-center">
                            <i class="bi bi-shield-lock-fill text-warning fs-1 mb-3"></i>
                            <h5>Keamanan Data</h5>
                            <p class="small text-white-50 m-0">Sistem login aman dilengkapi pembatasan hak akses middleware.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="features-card text-center">
                            <i class="bi bi-pencil-square text-info fs-1 mb-3"></i>
                            <h5>Operasi CRUD</h5>
                            <p class="small text-white-50 m-0">Tambah, baca, ubah, dan hapus katalog buku secara instan.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="features-card text-center">
                            <i class="bi bi-check-circle-fill text-success fs-1 mb-3"></i>
                            <h5>Validasi Ketat</h5>
                            <p class="small text-white-50 m-0">Sistem input form tervalidasi mencegah kesalahan entri.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="features-card text-center">
                            <i class="bi bi-speedometer2 text-danger fs-1 mb-3"></i>
                            <h5>Kinerja Cepat</h5>
                            <p class="small text-white-50 m-0">Dibangun menggunakan Laravel untuk performa optimal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center py-4 text-white-50">
        <div class="container">
            <p class="m-0">&copy; {{ date('Y') }} E-Library. Seluruh hak cipta dilindungi.</p>
        </div>
    </footer>

</body>
</html>