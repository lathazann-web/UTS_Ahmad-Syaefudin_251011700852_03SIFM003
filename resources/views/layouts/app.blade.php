<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Alat Camping - Black & Gold</title>
    
    <!-- Bootstrap 5 CSS Lokal -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
        }
        .text-gold { color: #d4af37 !important; }
        .bg-gold { background-color: #d4af37 !important; }
        .border-gold { border-color: #d4af37 !important; }
        
        .navbar-custom {
            background-color: #000000;
            border-bottom: 2px solid #d4af37;
        }
        .card-custom {
            background-color: #1e1e1e;
            border: 1px solid #d4af37;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.35);
        }
        .card-custom img {
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #d4af37;
        }
        .btn-gold {
            background-color: #d4af37;
            color: #000000;
            font-weight: bold;
            border: none;
        }
        .btn-gold:hover {
            background-color: #f1c40f;
            color: #000000;
        }
        .btn-outline-gold {
            border: 1px solid #d4af37;
            color: #d4af37;
        }
        .btn-outline-gold:hover {
            background-color: #d4af37;
            color: #000000;
        }
        footer {
            background-color: #000000;
            border-top: 1px solid #d4af37;
            color: #d4af37;
            padding: 1rem 0;
            margin-top: auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand text-gold fw-bold fs-4" href="{{ route('home') }}">
            ⛺ JUNN PEAK CAMP
        </a>
        <div class="ms-auto d-flex gap-3">
            <a href="{{ route('home') }}" class="nav-link text-gold fw-semibold">Home</a>
            <a href="{{ route('gears.index') }}" class="nav-link text-gold fw-semibold">Daftar Alat Camping</a>
        </div>
    </div>
</nav>

    <!-- Main Content Area -->
    <main class="flex-grow-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <small>&copy; 2026 UTS Rekayasa Web - Universitas Pamulang</small>
    </footer>

    <!-- Bootstrap 5 JS Lokal -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>