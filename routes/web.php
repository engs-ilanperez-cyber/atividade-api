<?php

use App\Http\Controllers\Api\FoxController;
use Illuminate\Support\Facades\Route;

Route::get('/nasa/{nome}', [FoxController::class, 'show']);