<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BukuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'                => $this->id,
            'kategori'          => $this->whenLoaded('kategori', fn () => $this->kategori->nama),
            'id_kategori'       => $this->kategori_id,
            'judul_buku'        => $this->judul,
            'penulis'           => $this->penulis,
            'tahun'             => $this->tahun_terbit,
            'jumlah_peminjaman' => $this->whenCounted('peminjamans'),
        ];
    }
}