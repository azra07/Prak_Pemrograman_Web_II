<!DOCTYPE html>
<html lang="id">
<head>
    <title>Detail - {{ $item->judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .exp-container { max-width: 800px; margin: 40px auto; }
        .card-detail { border-radius: 20px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 40px; }
        .kesan-box { background: #f8f9fa; border-left: 5px solid #0d6efd; padding: 20px; border-radius: 10px; }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary mb-4 shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Portfolio</a>
        <div class="navbar-nav flex-row">
            <a class="nav-link px-3" href="/">Beranda</a>
            <a class="nav-link px-3" href="/profil">Profil</a>
        </div>
    </div>
</nav>

<div class="container exp-container">
    <a href="/profil" class="text-decoration-none mb-3 d-block">← Kembali ke Profil</a>
    
    <div class="card card-detail">
        <img src="{{ asset('assets/' . $item->gambar) }}" class="card-img-top rounded mb-4" style="height: 350px; object-fit: cover;">
        
        <h1 class="fw-bold">{{ $item->judul }}</h1>
        <p class="text-muted"><i class="bi bi-calendar"></i> 📅 Tahun: {{ $item->waktu }}</p>
        
        <hr>
        
        <h5>📝 Deskripsi</h5>
        <p>{{ $item->deskripsi }}</p>
        
        <h5 class="mt-4">📖 Detail Lengkap</h5>
        <p>Berhasil melakukan: {{ $item->deskripsi }} dengan baik.</p>
        
        <div class="kesan-box mt-4">
            <h5>💭 Kesan yang Dirasakan</h5>
            <p class="fst-italic">"{{ $item->kesan }}"</p>
        </div>

        <div class="mt-4">
            <a href="/profil" class="btn btn-primary px-4">Lihat Pengalaman Lainnya</a>
        </div>
    </div>
</div>
</body>
</html>