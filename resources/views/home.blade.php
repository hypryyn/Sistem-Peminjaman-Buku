<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Peminjaman Buku')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .profile-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white py-4 mb-4">
        <div class="container">
            <h1 class="display-4">Sistem Peminjaman Buku</h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="/">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('siswa.index') }}">Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('buku.index') }}">Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('transaksi.index') }}">Transaksi</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarReports" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Reports
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarReports">
                            <li><a class="dropdown-item" href="{{ route('reports.pinjaman') }}">Report Pinjaman</a></li>
                            <li><a class="dropdown-item" href="{{ route('reports.siswa') }}">Report Data Siswa</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container text-center">
        <img src="/images/profile.jpg" alt="Profile" class="profile-image">
        <h2>Yanusman Zuhri</h2>
        <p>Kelas SI502 | Mata Kuliah Pemrograman Berbasis Web</p>
    </main>

    <footer class="bg-light text-center py-3 mt-4">
        <div class="container">
            <p class="m-0">&copy; 2024 Sistem Peminjaman Buku.</p>
            <p class="m-0">By Yanusman Zuhri</p>
        </div>
    </footer>
</body>
</html>
