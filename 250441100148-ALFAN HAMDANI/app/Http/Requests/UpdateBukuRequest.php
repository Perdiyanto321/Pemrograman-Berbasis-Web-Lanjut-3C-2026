<?php

namespace App\Http\Requests;

class UpdateBukuRequest extends StoreBukuRequest
{
    public function authorize(): bool
    {
        return true;
    }

    // Mewarisi aturan rules, messages, dan attributes dari StoreBukuRequest[cite: 2]
}