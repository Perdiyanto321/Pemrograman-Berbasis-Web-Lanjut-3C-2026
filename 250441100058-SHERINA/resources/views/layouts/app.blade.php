<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul', 'Perpustakaan Digital')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        .bg-custom-gradient {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>
<body class="bg-custom-gradient min-h-screen flex flex-col justify-between font-sans text-slate-800">
    <nav class="bg-white/80 backdrop-blur-md border-b border-slate-200 sticky top-0 z-50 shadow-xs">
        <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">
            <a href="{{ route('buku.index') }}" class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-pink-400 flex items-center justify-center text-white font-bold text-lg shadow-md shadow-pink-200">
                    📚
                </div>
                <div>
                    <span class="text-lg font-bold text-slate-900">Perpustakaan</span>
                    <span class="block text-xs font-semibold text-pink-400 -mt-1">Digital System</span>
                </div>
            </a>
            <div>
                <a href="{{ route('buku.index') }}" class="text-sm font-semibold text-slate-600 hover:text-pink-600 transition">Daftar Buku</a>
            </div>
        </div>
    </nav>
    <main class="max-w-7xl w-full mx-auto px-6 py-10 flex-grow">
        @yield('content')
    </main>
    <footer class="bg-white/60 border-t border-slate-200 py-6 text-center text-xs text-slate-400">
        &copy; 2026 Perpustakaan Digital
    </footer>
</body>
</html>