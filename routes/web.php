<?php

use App\Http\Controllers\Api\BeritaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/desawisata', function () {
    return view('desawisata');
});
