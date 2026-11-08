<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3 min-vh-100" style="width: 250px;">
            <h5 class="fw-bold mb-3"><i class="bi bi-lightning-charge-fill text-warning"></i> Volt Overview</h5>
            <hr class="border-secondary">
            
       <ul class="nav nav-pills flex-column mb-auto">
    <!-- 1. Menu Dashboard -->
    <li class="nav-item mb-1">
        <a href="#" class="nav-link text-white-50">
            <i class="bi bi-speedometer2 me-2"></i> Dashboard
        </a>
    </li>

    <!-- 2. Menu Pelanggan (Sudah Diarahkan) -->
    <li class="nav-item mb-1">
        <a href="{{ route('pelanggan.index') }}" class="nav-link {{ request()->routeIs('pelanggan.*') ? 'text-white bg-secondary fw-bold rounded' : 'text-white-50' }}">
            <i class="bi bi-people me-2"></i> Pelanggan
        </a>
    </li>

    <!-- 3. Menu User -->
    <li class="nav-item mb-1">
        <a href="{{ route('user.index') }}" class="nav-link {{ request()->routeIs('user.*') ? 'text-white bg-secondary fw-bold rounded' : 'text-white-50' }}">
            <i class="bi bi-person-fill me-2"></i> User
        </a>
    </li>
</ul>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 min-vh-100 d-flex flex-column">
            
            <div class="container-fluid p-4 flex-grow-1">
                <!-- Header Component -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="input-group" style="width: 250px;">
                        <span class="input-group-text bg-white border-end-0 text-muted"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Search">
                    </div>

                    <div class="d-flex align-items-center">
                        <i class="bi bi-bell-fill text-danger me-3"></i>
                        <img src="https://ui-avatars.com/api/?name=Bonnie+Green&background=0D8ABC&color=fff" class="rounded-circle me-2" width="32" height="32" alt="Avatar">
                        <span class="fw-bold text-dark small">Bonnie Green</span>
                    </div>
                </div>

                <!-- Page Content -->
                @yield('content')
            </div>

            <!-- Footer Component -->
            <footer class="footer p-4 text-muted small d-flex justify-content-between align-items-center border-top bg-white mt-auto">
                <div>
                    &copy; 2019-2026 Themesberg
                </div>
                <div>
                    <a href="#" class="text-muted text-decoration-none me-3">About</a>
                    <a href="#" class="text-muted text-decoration-none me-3">Themes</a>
                    <a href="#" class="text-muted text-decoration-none me-3">Blog</a>
                    <a href="#" class="text-muted text-decoration-none">Contact</a>
                </div>
            </footer>

        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>