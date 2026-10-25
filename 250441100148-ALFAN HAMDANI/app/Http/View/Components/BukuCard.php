<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BukuCard extends Component
{
    public $buku;

    public function __construct($buku)
    {
        $this->buku = $buku;
    }

    public function render(): View|Closure|string
    {
        return view('components.buku-card');
    }
}