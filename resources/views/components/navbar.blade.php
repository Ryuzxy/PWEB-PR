@php
    $role = session('role');
@endphp

<nav>
    @if($role === 'admin')
        <div class="container">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ url('/admin/dashboard') }}" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="{{ url('/admin/pengelolaan-menu') }}" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="{{ url('/admin/profile') }}" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link text-danger">Logout</a></li>
            </ul>
        </div>
    </div>
    @elseif($role === 'user')
        <div class="container">
        <a class="navbar-brand" href="#">Pelanggan Panel</a>
        <div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ url('/pelanggan/dashboard') }}" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="{{ url('/pelanggan/profile') }}" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link text-danger">Logout</a></li>
            </ul>
        </div>
    </div>
    @endif

    {{-- hanya tampilkan tombol login kalau belum login --}}
    @if(!$role)
        <a href="{{ route('pelanggan.login') }}">Login Pelangan</a>
        <a href="{{ route('admin.login') }}">Login Admin</a>
    @endif
</nav>

