<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KorbanController;
use App\Http\Controllers\KasusController;
use App\Http\Controllers\EvidenceController;
use App\Http\Controllers\TindakanForensikController;
Route::post('/register-petugas', [AuthController::class, 'registerPetugas']);
Route::post('/register-viewer', [AuthController::class, 'registerViewer']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/korban', [KorbanController::class, 'index']);
    Route::get('/korban/{id}', [KorbanController::class, 'show']);
    Route::get('/kasus', [KasusController::class, 'index']);
    Route::get('/kasus/{id}', [KasusController::class, 'show']);
    Route::get('/evidence', [EvidenceController::class, 'index']);
    Route::get('/evidence/{id}', [EvidenceController::class, 'show']);
    Route::get('/tindakan', [TindakanForensikController::class, 'index']);
    Route::get('/tindakan/{id}', [TindakanForensikController::class, 'show']);
});
Route::middleware(['auth:sanctum', 'role:petugas'])->group(function () {
    Route::post('/korban', [KorbanController::class, 'store']);
    Route::put('/korban/{id}', [KorbanController::class, 'update']);
    Route::delete('/korban/{id}', [KorbanController::class, 'destroy']);
    Route::post('/kasus', [KasusController::class, 'store']);
    Route::put('/kasus/{id}', [KasusController::class, 'update']);
    Route::delete('/kasus/{id}', [KasusController::class, 'destroy']);
    Route::post('/evidence', [EvidenceController::class, 'store']);
    Route::put('/evidence/{id}', [EvidenceController::class, 'update']);
    Route::delete('/evidence/{id}', [EvidenceController::class, 'destroy']);
    Route::post('/tindakan', [TindakanForensikController::class, 'store']);
    Route::put('/tindakan/{id}', [TindakanForensikController::class, 'update']);
    Route::delete('/tindakan/{id}', [TindakanForensikController::class, 'destroy']);
});
