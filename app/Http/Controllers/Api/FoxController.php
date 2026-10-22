<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FoxResource;
use Illuminate\Support\Facades\Http;

class FoxController extends Controller
{
    public function show(string $nasa)
    {
        $response = Http::withoutVerifying()->get('https://images-api.nasa.gov/search', [
            'q'          => $nasa,
            'media_type' => 'image',
        ]);

        $item = $response->json('collection.items.0');

        return new FoxResource($item);
    }
}