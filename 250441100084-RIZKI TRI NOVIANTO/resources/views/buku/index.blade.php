@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <div class="page-heading">
        <h2>Daftar Buku</h2>
        <p>Total {{ count($daftarBuku) }} buku tersedia di perpustakaan.</p>
    </div>

    <div class="book-grid">
        @foreach ($daftarBuku as $buku)
            <x-kartu-buku :buku="$buku">
                {{-- Default slot: bagian tambahan --}}
                <span class="badge">{{ $buku['kategori'] }}</span>

                {{-- Named slot: footer kartu --}}
                <x-slot:footer>
                    ID Buku: #{{ $buku['id'] }}
                </x-slot:footer>
            </x-kartu-buku>
        @endforeach
    </div>
@endsection
