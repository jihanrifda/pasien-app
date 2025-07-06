<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Custom Styles --}}
    <style>
        body {
            background: #fff;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background-color: #f8c8dc !important; /* pastel pink */
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .navbar .nav-link {
            color: #4b2e35 !important;
            transition: all 0.3s ease;
        }

        .navbar .nav-link:hover {
            color: #d63384 !important;
            transform: scale(1.05);
        }

        .navbar .nav-link.active {
            font-weight: bold;
            text-decoration: underline;
        }

        .navbar-brand {
            color: #4b2e35 !important;
            font-weight: bold;
        }

        .btn {
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        .card {
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

    {{-- ✅ NAVBAR --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="bi bi-hospital"></i> RS Sehat Selalu
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                            <i class="bi bi-speedometer2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('pasien*') ? 'active' : '' }}" href="{{ route('pasien.index') }}">
                            <i class="bi bi-person-lines-fill"></i> Pasien
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dokter*') ? 'active' : '' }}" href="{{ route('dokter.index') }}">
                            <i class="bi bi-person-badge"></i> Dokter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('pendaftaran*') ? 'active' : '' }}" href="{{ route('pendaftaran.index') }}">
                            <i class="bi bi-journal-plus"></i> Pendaftaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('laporan*') ? 'active' : '' }}" href="{{ route('laporan.index') }}">
                            <i class="bi bi-file-earmark-text"></i> Laporan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profil') ? 'active' : '' }}" href="{{ url('/profil') }}">
                            <i class="bi bi-person-circle"></i> Profil
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ✅ KONTEN UTAMA --}}
    <main class="container py-4">
        @yield('content')
    </main>

    {{-- ✅ FOOTER --}}
    <footer class="text-center text-muted py-3 mt-auto">
        <small>&copy; {{ date('Y') }} RS Sehat Selalu. All rights reserved.</small>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
