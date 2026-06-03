<!DOCTYPE html>
<html lang="id">
<head>
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #eef5ff; min-height: 100vh; }
        .navbar { background-color: #1e56ff; }
        .hero-section { padding: 80px 0; }
        .profile-card { 
            background: white; border-radius: 20px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.05); 
            padding: 30px; border: 1px solid #dee2e6;
        }
        .main-img { 
            width: 100%; max-width: 300px; border-radius: 25px; 
            box-shadow: 0 15px 35px rgba(0,0,0,0.1); 
        }
        .btn-custom { background-color: #1e56ff; color: white; padding: 10px 25px; border-radius: 10px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Portfolio</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link active" href="/">Beranda</a>
            <a class="nav-link" href="/profil">Profil</a>
        </div>
    </div>
</nav>

<div class="container hero-section">
    <div class="profile-card">
        <div class="row align-items-center">
            
            <div class="col-md-5">
                <img src="{{ asset('assets/' . $profil->gambar) }}" class="main-img" alt="Foto Profil">
            </div>
            
            <div class="col-md-7 ps-md-5">
                <h1 class="fw-bold display-4">Halo, Selamat Datang</h1>
                
                <hr class="my-4">
                
                <div class="mb-3">
                    <small class="text-uppercase text-primary fw-bold">Nama</small>
                    <h3 class="fw-bold">{{ $profil->nama }}</h3>
                </div>
                
                <div class="mb-4">
                    <small class="text-uppercase text-primary fw-bold">NIM</small>
                    <p class="fs-5 fw-bold">{{ $profil->nim }}</p>
                </div>

                <a href="/profil" class="btn btn-primary">Lihat Profil Lengkap</a>
            </div>

        </div>
    </div>
</div>
</body>
</html>