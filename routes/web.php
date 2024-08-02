<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('/seguros', [HomeController::class, 'seguros'])->name('seguros');
