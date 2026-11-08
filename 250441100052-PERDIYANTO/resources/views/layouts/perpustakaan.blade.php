<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            @yield('title', 'Perpustakaan Perdi')
        </h1>
    </x-slot>

    <div class="konten max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 overflow-x-auto">
        @yield('content')
    </div>

    <footer class="text-center text-sm text-gray-500 py-6">
        &copy; 2026 - Perdiyanto 250441100052
    </footer>

    @stack('scripts')
</x-app-layout>