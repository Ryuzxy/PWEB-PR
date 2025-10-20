@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-3">Selamat Datang, {{ $username ?? 'Admin' }} 👋</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Dashboard Admin</h5>
                <p class="card-text">
                    Ini adalah halaman utama admin. Kamu bisa mengelola menu, melihat profil, atau logout dari sistem.
                </p>

                <div class="d-flex gap-2 mt-3">
                    <a href="{{ url('/admin/pengelolaan-menu') }}" class="btn btn-primary">Kelola Menu</a>
                    <a href="{{ url('/admin/profile') }}" class="btn btn-secondary">Lihat Profil</a>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <h4>Statistik Singkat</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Total Menu</h5>
                            <p class="card-text fs-4 fw-bold">12</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="card text-center border-success">
                        <div class="card-body">
                            <h5 class="card-title">Pesanan Hari Ini</h5>
                            <p class="card-text fs-4 fw-bold">8</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="card text-center border-warning">
                        <div class="card-body">
                            <h5 class="card-title">Pelanggan Aktif</h5>
                            <p class="card-text fs-4 fw-bold">25</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
