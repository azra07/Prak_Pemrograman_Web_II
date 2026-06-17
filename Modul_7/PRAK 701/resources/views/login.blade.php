<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
            min-height: 100vh;
        }
        .card-login {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: none;
        }
        .login-btn {
            background-color: #4f46e5;
            color: #fff;
            font-weight: 500;
            border-radius: 30px;
            padding: 10px;
            transition: all 0.3s ease;
        }
        .login-btn:hover {
            background-color: #4338ca;
            transform: translateY(-2px);
        }
        .input-group-text {
            background-color: #f3f4f6;
            border-right: none;
        }
        .form-control {
            border-left: none;
            background-color: #f3f4f6;
        }
        .form-control:focus {
            background-color: #ffffff;
            box-shadow: none;
            border-color: #ced4da;
        }
    </style>
</head>
<body class="d-flex align-items-center py-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                
                @if(session('warning'))
                    <div class="alert alert-warning alert-dismissible fade show text-center mb-3 shadow-sm" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('warning') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show text-center mb-3 shadow-sm" role="alert">
                        <i class="bi bi-x-circle-fill me-2"></i>
                        @if($errors->has('loginError'))
                            {{ $errors->first('loginError') }}
                        @else
                            Harap isi seluruh formulir dengan benar!
                        @endif
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card card-login p-4 p-sm-5">
                    <div class="text-center mb-4">
                        <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-circle d-inline-block mb-3">
                            <i class="bi bi-book-half fs-1"></i>
                        </div>
                        <h3 class="fw-bold text-dark">Selamat Datang</h3>
                        <p class="text-muted small">Silakan masuk untuk mengelola perpustakaan</p>
                    </div>

                    <form action="{{ route('login.post') }}" method="POST" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label text-secondary small fw-medium">Alamat Email</label>
                            <div class="input-group">
                                <span class="input-group-text text-muted @error('email') border-danger text-danger @enderror">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" 
                                       name="email" 
                                       class="form-control @error('email') is-invalid @enderror" 
                                       placeholder="Masukan email Anda" 
                                       value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback text-start ps-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-secondary small fw-medium">Password</label>
                            <div class="input-group">
                                <span class="input-group-text text-muted @error('password') border-danger text-danger @enderror">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password" 
                                       name="password" 
                                       class="form-control @error('password') is-invalid @enderror" 
                                       placeholder="••••••••">
                                @error('password')
                                    <div class="invalid-feedback text-start ps-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn login-btn w-100 py-2.5 mt-2">Masuk Sekarang</button>
                    </form>

                    <hr class="my-4 text-muted">
                    
                    <div class="text-center">
                        <a href="{{ route('landing') }}" class="text-decoration-none small text-secondary">
                            <i class="bi bi-arrow-left me-1"></i>Kembali
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>