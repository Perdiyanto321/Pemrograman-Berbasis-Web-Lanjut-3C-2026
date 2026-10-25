<div class="bg-white rounded-lg shadow-md p-5 border border-gray-200 flex flex-col justify-between hover:shadow-lg transition">
    <div>
        <span class="text-xs font-semibold px-2.5 py-0.5 bg-pink-100 text-pink-800 rounded-full">
            {{ $kategori }}
        </span>
        <h3 class="text-lg font-bold text-gray-900 mt-2">{{ $judul }}</h3>
        <p class="text-sm text-gray-600 mt-1">Penulis: <span class="font-medium">{{ $penulis }}</span></p>
        <p class="text-sm text-gray-600">Tahun: <span class="font-medium">{{ $tahun }}</span></p>
    </div>
    <div class="mt-4">
        {{ $slot }}
    </div>
    <div class="mt-4 pt-3 border-t border-gray-100">
        <a href="{{ $urlDetail }}" class="inline-block w-full text-center bg-pink-600 hover:bg-pink-700 text-white text-sm font-semibold py-2 px-4 rounded transition">
            Lihat Detail
        </a>
    </div>
</div>