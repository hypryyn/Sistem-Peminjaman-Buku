<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Peminjaman Buku')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-QF05r7RxTd2Pz0l+AGFjRk5qCgXaAF8W+/JrRePJm96X2i7AMp09H2VfyQDa2gNC" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-pEVyDx8S+5ntnpfFETMEqb/I6YRiBM61R94XGh2Pqqw7Tx1pbt1STeFCR6BY9j7w" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header class="bg-primary text-white py-4 mb-4">
        <div class="container">
            <h1 class="display-4">Sistem Peminjaman Buku</h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
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

            <ul class="navbar-nav ms-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="bg-light text-center py-3 mt-4">
        <div class="container">
            <p class="m-0">&copy; 2024 Sistem Peminjaman Buku.</p>
            <p class="m-0">By Yanusman Zuhri</p>
        </div>
    </footer>
</body>
</html>
