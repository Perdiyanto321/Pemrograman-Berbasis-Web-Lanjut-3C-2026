<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            // Eksplisit menyebutkan nama tabel 'kategoris'
            $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade');
            $table->string('judul');
            $table->string('penulis');
            $table->integer('tahun_terbit');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};