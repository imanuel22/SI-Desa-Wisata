<?php

use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('berita', BeritaController::class);

Route::get('/desawisata', function () {
    return view('desawisata');
});
