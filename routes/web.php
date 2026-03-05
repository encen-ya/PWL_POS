<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\LevelController;

Route::get('/level', [LevelController::class, 'index']);

use App\Http\Controllers\KategoriController;
Route::get('/kategori', [KategoriController::class, 'index']);

