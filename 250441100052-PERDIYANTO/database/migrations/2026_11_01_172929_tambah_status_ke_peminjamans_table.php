<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('peminjamans', function (Blueprint $table) {
            $table->string('status', 20)->default('diajukan')->after('tanggal_kembali');
        });

        // Backfill: sesuaikan data lama dengan kenyataannya
        DB::table('peminjamans')
            ->whereNotNull('tanggal_kembali')
            ->update(['status' => 'dikembalikan']);

        DB::table('peminjamans')
            ->whereNull('tanggal_kembali')
            ->update(['status' => 'dipinjam']);
    }

    public function down(): void
    {
        Schema::table('peminjamans', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};