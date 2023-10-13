<?php

use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/turismo', [TourController::class, 'index'])->name('turismo.index');
Route::get('/turismo/showlaguna', [TourController::class, 'showlaguna'])->name('turismo.showlaguna');
