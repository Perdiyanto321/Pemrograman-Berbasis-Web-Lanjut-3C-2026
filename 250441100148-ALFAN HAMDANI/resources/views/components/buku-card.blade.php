<div class="buku-card">
    <div>
        <h3>{{ $buku['judul'] }}</h3>
        <p><strong>Penulis:</strong> {{ $buku['penulis'] }}</p>
        <p><strong>Tahun Terbit:</strong> {{ $buku['tahun_terbit'] }}</p>

        <!-- Named Slot opsional -->
        @if (isset($extraInfo))
            <div class="badge">
                {{ $extraInfo }}
            </div>
        @endif
    </div>

    <div>
        <!-- Default Slot / Custom Button area -->
        {{ $slot }}
    </div>
</div>