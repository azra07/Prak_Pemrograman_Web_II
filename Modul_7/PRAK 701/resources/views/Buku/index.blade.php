<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
        }
        .navbar {
            background-color: #ffffff !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        .main-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }
        .table {
            vertical-align: middle;
        }
        .btn-action {
            border-radius: 8px;
            padding: 6px 12px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        .profile-pill {
            background-color: #f3f4f6;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #4b5563;
        }
        a.profile-pill {
            transition: all 0.2s ease-in-out;
        }
        a.profile-pill:hover {
            background-color: #e5e7eb;
            color: #1e3c72;
            transform: translateY(-1px);
        }
    </style>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <span class="navbar-brand fw-bold text-primary"><i class="bi bi-book-half me-2"></i>E-Library</span>
            <div class="d-flex align-items-center gap-3">
                <a href="{{ route('profile.edit') }}" class="profile-pill text-decoration-none d-inline-block hover-effect">
                    <i class="bi bi-person-fill me-2"></i>{{ Auth::user()->username }}
                </a>
                <form action="{{ route('logout') }}" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger rounded-pill px-3 py-1.5 btn-sm"><i class="bi bi-box-arrow-right me-1"></i>Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card main-card p-4 p-md-5 mb-5 bg-white">
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-4 gap-3">
                <div>
                    <h3 class="fw-bold text-dark m-0">Katalog Buku</h3>
                    <p class="text-muted small m-0">Kelola informasi koleksi buku di perpustakaan</p>
                </div>
                <a href="{{ route('buku.create') }}" class="btn btn-primary rounded-pill px-4 py-2 shadow-sm"><i class="bi bi-plus-lg me-2"></i>Tambah Buku</a>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center py-3" style="width: 80px;">ID</th>
                            <th class="py-3">Judul Buku</th>
                            <th class="py-3">Penulis</th>
                            <th class="py-3">Penerbit</th>
                            <th class="text-center py-3">Tahun Terbit</th>
                            <th class="text-center py-3" style="width: 200px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($buku as $item)
                            <tr>
                                <td class="text-center fw-bold text-secondary">{{ $item->id }}</td>
                                <td class="fw-semibold text-dark">{{ $item->judul }}</td>
                                <td>{{ $item->penulis }}</td>
                                <td>{{ $item->penerbit }}</td>
                                <td class="text-center"><span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-2 rounded-pill">{{ $item->tahun_terbit }}</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning text-white btn-action"><i class="bi bi-pencil-fill me-1"></i>Edit</a>
                                        <form action="{{ route('buku.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-action"><i class="bi bi-trash-fill me-1"></i>Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5 text-muted">
                                    <i class="bi bi-inbox fs-1 d-block mb-3"></i>
                                    Tidak ada koleksi data buku saat ini.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>