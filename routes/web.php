<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/page/{slug}', [PageController::class, 'showPage'])->name('showPage');
// TASK 4. Using the Single Action Controller
Route::get('/redirect', RedirectController::class);