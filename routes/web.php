<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('pages.home');
Route::get('/about-us', [App\Http\Controllers\PageController::class, 'about'])->name('pages.about');
Route::get('/doctors', [App\Http\Controllers\PageController::class, 'doctors'])->name('pages.doctors');

Route::get('/backends', [App\Http\Controllers\Backends\DashboardController::class, 'index'])->name('backends.dashboard');

Route::get('/backends/doctors', [App\Http\Controllers\Backends\DoctorController::class, 'index'])->name('backends.doctors.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
