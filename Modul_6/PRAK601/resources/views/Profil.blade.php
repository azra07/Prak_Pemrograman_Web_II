<!DOCTYPE html>
<html lang="id">
<head>
    <title>Profil Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .badge-custom { background: #e0e7ff; color: #4f46e5; border-radius: 20px; padding: 8px 15px; margin-right: 5px; }
        .card-exp { border: none; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .exp-img { height: 200px; object-fit: cover; }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary mb-5 shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Portfolio</a>
        <div class="navbar-nav flex-row">
            <a class="nav-link px-3" href="/">Beranda</a>
            <a class="nav-link active px-3" href="/profil">Profil</a>
        </div>
    </div>
</nav>

<div class="container">
    <!-- Header Profil -->
    <div class="card p-5 mb-5 shadow-sm border-0">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="{{ asset('assets/' . $profil->gambar) }}" class="rounded-circle" width="180" height="180" style="object-fit: cover;">
            </div>
            <div class="col-md-9">
                <h2 class="fw-bold">{{ $profil->nama }}</h2>
                <p class="text-muted"><strong>NIM:</strong> {{ $profil->nim }} | <strong>Prodi:</strong> {{ $profil->prodi }}</p>
                
                <div class="mb-3">
                    <p><strong>🎮 Hobi:</strong></p>
                    @foreach(explode(',', $profil->hobi) as $h)
                        <span class="badge-custom">{{ trim($h) }}</span>
                    @endforeach
                </div>
                
                <div>
                    <p><strong>💻 Skill:</strong></p>
                    @foreach(explode(',', $profil->skill) as $s)
                        <span class="badge bg-success">{{ trim($s) }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Pengalaman -->
    <h3 class="fw-bold mb-4">✨ Pengalaman Berkesan</h3>
    <div class="row g-4">
        @foreach($pengalamans as $p)
        <div class="col-md-6">
            <div class="card card-exp h-100">
                <img src="{{ asset('assets/' . ($p->gambar ?? 'default.jpg')) }}" class="card-img-top exp-img">
                <div class="card-body">
                    <h5 class="fw-bold">{{ $p->judul }}</h5>
                    <p class="text-muted small">{{ $p->waktu }}</p>
                    <p class="card-text">{{ $p->deskripsi }}</p>
                    <em class="text-primary">"{{ $p->kesan }}"</em>
                    <div class="mt-3">
                        <a href="/detail/{{ $p->id }}" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>