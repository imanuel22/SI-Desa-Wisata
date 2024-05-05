<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AkunController;
use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\DesawisataController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/berita', BeritaController::class);
Route::apiResource('/desawisata', DesawisataController::class);

