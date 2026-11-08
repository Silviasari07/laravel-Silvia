<ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item mb-1">
        <a href="#" class="nav-link text-white-50 {{ request()->routeIs('dashboard') ? 'active bg-secondary text-white' : '' }}">
            <i class="bi bi-speedometer2 me-2"></i> Dashboard
        </a>
    </li>
    <li class="nav-item mb-1">
        <a href="#" class="nav-link text-white-50 {{ request()->routeIs('pelanggan.*') ? 'active bg-secondary text-white' : '' }}">
            <i class="bi bi-people me-2"></i> Pelanggan
        </a>
    </li>
    <!-- Menu User Ter-highlight Active (Sesuai Modul) -->
    <li class="nav-item mb-1">
        <a href="{{ route('user.index') }}" class="nav-link text-white {{ request()->routeIs('user.*') ? 'active bg-secondary fw-bold' : 'text-white-50' }}">
            <i class="bi bi-person-fill me-2"></i> User
        </a>
    </li>
</ul>