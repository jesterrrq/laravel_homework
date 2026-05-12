<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items', [MainController::class, 'index'])->name('items.index');

Route::get('/about', [MainController::class, 'about'])->name('about');