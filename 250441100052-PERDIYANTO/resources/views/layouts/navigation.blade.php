
@php
    $user = auth()->user();

    // [label, nama route, pola route aktif, tampil?]
    $menu = $user ? collect([
        ['Dashboard', 'dashboard', ['dashboard', 'admin.dashboard', 'petugas.dashboard', 'siswa.dashboard'], true],
        ['Buku', 'buku.index', ['buku.*'], $user->can('lihat daftar buku')],
        ['Kelola Buku', 'kelola-buku.index', ['kelola-buku.*'], $user->can('kelola data buku')],
        ['Peminjaman Saya', 'peminjaman.index', ['peminjaman.*'], $user->hasRole('siswa')],
        ['Peminjaman', 'kelola.peminjaman', ['kelola.peminjaman*'], $user->can('kelola peminjaman')],
        ['Pengembalian', 'kelola.pengembalian', ['kelola.pengembalian*'], $user->can('kelola pengembalian')],
        ['Laporan', 'laporan.index', ['laporan.*'], $user->can('lihat laporan perpustakaan')],
        ['Pengguna', 'admin.users.index', ['admin.users.*'], $user->can('kelola data pengguna')],
    ])->filter(fn ($m) => $m[3]) : collect();
@endphp

<nav class="navbar" x-data="{ open: false, profileOpen: false }">

    <div class="navbar-inner">

        <!-- Logo -->
        <div class="navbar-brand">
            <a href="{{ $user ? route('dashboard') : route('home') }}">
                Perpustakaan Perdi
            </a>
        </div>

        <!-- Menu Desktop -->
        <div class="navbar-menu">

            @foreach ($menu as $m)
                <a
                    href="{{ route($m[1]) }}"
                    class="nav-link {{ request()->routeIs(...$m[2]) ? 'active' : '' }}"
                >
                    {{ $m[0] }}
                </a>
            @endforeach

        </div>

        <!-- Bagian Akun -->
        <div class="navbar-account">

            @auth
                <div class="profile-wrapper">

                    <button
                        type="button"
                        class="profile-button"
                        @click="profileOpen = !profileOpen"
                    >
                        <span>{{ $user->name }}</span>

                        <span class="profile-role">
                            {{ $user->getRoleNames()->first() ?? 'tanpa role' }}
                        </span>

                        <span class="dropdown-icon">▼</span>
                    </button>

                    <!-- Dropdown Profil -->
                    <div
                        class="profile-dropdown"
                        x-show="profileOpen"
                        x-cloak
                        @click.outside="profileOpen = false"
                    >
                        <a href="{{ route('profile.edit') }}">
                            Profil
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit">
                                Keluar
                            </button>
                        </form>
                    </div>

                </div>
            @else
                <a href="{{ route('login') }}" class="nav-login">
                    Login
                </a>

                <a href="{{ route('register') }}" class="nav-register">
                    Daftar
                </a>
            @endauth

        </div>

        <!-- Tombol Menu Mobile -->
        <button
            type="button"
            class="navbar-toggle"
            @click="open = !open"
            :aria-expanded="open.toString()"
            aria-label="Buka menu navigasi"
        >
            <span x-show="!open">☰</span>
            <span x-show="open" x-cloak>✕</span>
        </button>

    </div>

    <!-- Menu Mobile -->
    <div class="mobile-menu" x-show="open" x-cloak>

        @foreach ($menu as $m)
            <a
                href="{{ route($m[1]) }}"
                class="mobile-link {{ request()->routeIs(...$m[2]) ? 'active' : '' }}"
            >
                {{ $m[0] }}
            </a>
        @endforeach

        <div class="mobile-account">

            @auth
                <div class="mobile-user">
                    <strong>{{ $user->name }}</strong>
                    <span>{{ $user->email }}</span>
                    <small>
                        {{ $user->getRoleNames()->first() ?? 'tanpa role' }}
                    </small>
                </div>

                <a href="{{ route('profile.edit') }}" class="mobile-link">
                    Profil
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="mobile-logout">
                        Keluar
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="mobile-link">
                    Login
                </a>

                <a href="{{ route('register') }}" class="mobile-link">
                    Daftar
                </a>
            @endauth

        </div>

    </div>

</nav>
