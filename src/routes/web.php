<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RomanNumeralsController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::post('/convert', [RomanNumeralsController::class, 'convert']);