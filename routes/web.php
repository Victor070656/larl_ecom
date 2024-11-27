<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('shop.home');
})->name('home');

Route::get('/about', function () {
    return view('shop.about');
})->name('about');

Route::get('/contact', function () {
    return view('shop.contact');
})->name('contact');

Route::get('/market', function () {
    return view('shop.market');
})->name('market');

Route::get('dashboard', function () {
    return view('manager.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('users', function () {
    return view('manager.users');
})->middleware(['auth', 'verified'])->name('users');

Route::get('profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');


require __DIR__ . '/auth.php';
