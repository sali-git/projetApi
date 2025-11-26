<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

// ==========================================
// ROUTES PUBLIQUES (sans authentification)
// ==========================================
Route::prefix('auth')->group(function () {
    // POST /api/auth/register
    Route::post('register', [AuthController::class, 'register']);

    // POST /api/auth/login
    Route::post('login', [AuthController::class, 'login']);
});

// ==========================================
// ROUTES PROTÉGÉES (authentification JWT requise)
// ==========================================
Route::prefix('auth')->middleware('auth:api')->group(function () {
    // GET /api/auth/me
    Route::get('me', [AuthController::class, 'me']);

    // POST /api/auth/logout
    Route::post('logout', [AuthController::class, 'logout']);

    // POST /api/auth/refresh
    Route::post('refresh', [AuthController::class, 'refresh']);
});
