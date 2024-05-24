<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RomanNumeralsController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/convert', [RomanNumeralsController::class, 'convert'])->name('convert');