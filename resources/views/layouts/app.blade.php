<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pelanggan</title>

    <!-- CDN Bootstrap & Icons (Pengganti Vite) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        body { background-color: #f5f8fb; font-family: sans-serif; }
        .sidebar { min-height: 100vh; background-color: #1f2937; width: 250px; position: fixed; top: 0; left: 0; z-index: 100; }
        .sidebar .nav-link { color: #9ca3af; padding: 10px 16px; font-weight: 500; border-radius: 6px; margin-bottom: 4px; }
        .sidebar .nav-link.active, .sidebar .nav-link:hover { color: #fff; background-color: #374151; }
        .main-wrapper { margin-left: 250px; padding: 25px 35px; }
    </style>
</head>

<body>

    <!-- SIDEBAR VOLT -->
    <div class="sidebar p-3 d-flex flex-column">
        <a href="#" class="d-flex align-items-center mb-4 text-white text-decoration-none fs-5 fw-bold px-2 pt-2">
            <i class="bi bi-lightning-charge-fill text-warning me-2"></i> Volt Overview
        </a>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('pelanggan.index') }}" class="nav-link active">
                    <i class="bi bi-people-fill me-2"></i> Pelanggan
                </a>
            </li>
            <li class="nav-item mt-4">
                <a href="#" class="nav-link text-white-50">
                    <i class="bi bi-file-text me-2"></i> Documentation <span class="badge bg-warning text-dark ms-1">v1.4</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- AREA KONTEN UTAMA -->
    <div class="main-wrapper">
        <!-- TOPBAR SEARCH & PROFILE -->
        <div class="d-flex justify-content-between align-items-center pb-3 mb-3 border-bottom">
            <div class="input-group" style="max-width: 250px;">
                <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                <input type="text" class="form-control border-start-0 bg-white" placeholder="Search">
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-bell-fill me-3 text-muted"></i>
                <div class="bg-dark rounded-circle text-white d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px; font-size: 13px;">B</div>
                <span class="fw-semibold small">User</span>
            </div>
        </div>

        <!-- FORM CREATE / EDIT -->
        @yield('content')

        <!-- FOOTER -->
        <footer class="d-flex justify-content-between align-items-center pt-4 mt-5 text-muted border-top" style="font-size: 13px;">
            <p class="mb-0">&copy; 2019- Themesberg</p>
            <div>
                <a href="#" class="text-muted text-decoration-none me-3">About</a>
                <a href="#" class="text-muted text-decoration-none me-3">Themes</a>
                <a href="#" class="text-muted text-decoration-none me-3">Blog</a>
                <a href="#" class="text-muted text-decoration-none">Contact</a>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>