<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Tanaman Hias - UTS Rekayasa Web</title>
    <!-- Memanggil CSS Bootstrap via CDN agar langsung aktif -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('plants.index') }}">🌿 PlantStore Katalog</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="{{ route('plants.index') }}">Beranda</a>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center py-4 text-muted border-top mt-5">
        <p>&copy; 2026 UTS Rekayasa Web - Sistem Informasi Universitas Pamulang</p>
    </footer>

    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>