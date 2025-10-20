<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllers extends Controller
{
    // =======================
    // ==== LOGIN SECTION ====
    // =======================

    // Menampilkan form login pelanggan
    public function loginPelanggan()
    {
        return view('pelanggan.login');
    }

    // Menampilkan form login admin
    public function showLogin()
    {
        return view('admin.login');
    }

    // Proses login pelanggan
    public function doLoginPelanggan(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Login sederhana tanpa database
        if ($username && $password) {
            session(['role' => 'pelanggan', 'username' => $username]);
            return redirect()->route('pelanggan.dashboard');
        }

        return redirect()->back()->with('error', 'Username atau password kosong!');
    }

    // Proses login admin
    public function doLoginAdmin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Login dummy (contoh sederhana)
        if ($username === 'Ryu' && $password === '1234') {
            session(['role' => 'admin', 'username' => $username]);
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('error', 'Login gagal! Username atau password salah.');
    }

    // Logout untuk semua role
    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    // =======================
    // ==== ADMIN SECTION ====
    // =======================

    public function dashboard()
    {
        if (session('role') !== 'admin') {
            return redirect('/admin/login');
        }

        $username = session('username');
        return view('admin.dashboard', compact('username'));
    }

    public function profileAdmin()
    {
        if (session('role') !== 'admin') {
            return redirect('/admin/login');
        }

        $username = session('username');
        return view('admin.profile', compact('username'));
    }

    public function pengelolaanMenu()
    {
        if (session('role') !== 'admin') {
            return redirect('/admin/login');
        }

        // contoh data array
        $menus = [
            ['nama' => 'Mie Ayam Original', 'harga' => 15000],
            ['nama' => 'Mie Ayam Bakso', 'harga' => 18000],
            ['nama' => 'Es Teh Manis', 'harga' => 5000],
        ];

        return view('admin.pengelolaanmenu', compact('menus'));
    }

    // =======================
    // ==== PELANGGAN SECTION ====
    // =======================

    public function dashboardPelanggan()
    {
        if (session('role') !== 'pelanggan') {
            return redirect('/pelanggan/login');
        }

        $username = session('username');
        return view('pelanggan.dashboard', compact('username'));
    }

    public function profilePelanggan()
    {
        if (session('role') !== 'pelanggan') {
            return redirect('/pelanggan/login');
        }

        $username = session('username');
        return view('pelanggan.profile', compact('username'));
    }
}
