<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/portofolio', [BlogController::class, 'portofolio']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
