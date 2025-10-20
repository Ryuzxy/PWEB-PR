<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') | Sistem Admin</title>

    {{-- 🔗 Vite: pastikan Tailwind & JS terhubung --}}
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-gray-50 text-gray-800">

    {{-- ✅ Navbar --}}
    <header>
        <x-navbar />
    </header>

    {{-- ✅ Main content area --}}
    <main class="flex-grow container mx-auto px-4 py-6">
        @yield('content')
    </main>

    {{-- ✅ Footer --}}
    <footer class="bg-gray-800 text-gray-200 text-center py-4 mt-auto">
        @include('components.footer')
    </footer>

    {{-- ✅ Optional JS scripts --}}
    @stack('scripts')
</body>
</html>
