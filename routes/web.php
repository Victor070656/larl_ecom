<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'shop.home')->name("home");
Route::view('/about', 'shop.about')->name("about");
Route::view('/contact', 'shop.contact')->name("contact");
Route::view('/market', 'shop.market')->name("market");

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
