<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/plan', 'plan');
Route::view('/contact', 'contact');
// Route::view('/terms', 'terms');
// Route::view('/policy', 'policy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
