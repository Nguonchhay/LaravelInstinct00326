<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('pages.home');
Route::get('/about-us', [App\Http\Controllers\PageController::class, 'about'])->name('pages.about');
Route::get('/doctors', [App\Http\Controllers\PageController::class, 'doctors'])->name('pages.doctors');

// Allow only logged in
Route::group([
    'middleware' => ['auth']
], function() {

    // Frontend routes


    // Backend routes 
    Route::group([
        'prefix' => 'backends',
        'middleware' => [App\Http\Middleware\BackendMiddleware::class],
    ], function() {
        Route::get('/', [App\Http\Controllers\Backends\DashboardController::class, 'index'])->name('backends.dashboard');

        Route::group([
            'prefix' => 'doctors'
        ], function (){
            Route::get('/', [App\Http\Controllers\Backends\DoctorController::class, 'index'])->name('backends.doctors.index');
            Route::get('/create', [App\Http\Controllers\Backends\DoctorController::class, 'create'])->name('backends.doctors.create');
            Route::post('/', [App\Http\Controllers\Backends\DoctorController::class, 'store'])->name('backends.doctors.store');
            Route::get('/{doctor}/edit', [App\Http\Controllers\Backends\DoctorController::class, 'edit'])->name('backends.doctors.edit');
            Route::put('/{doctor}/update', [App\Http\Controllers\Backends\DoctorController::class, 'update'])->name('backends.doctors.update');
            Route::delete('/{doctor}/destroy', [App\Http\Controllers\Backends\DoctorController::class, 'destroy'])->name('backends.doctors.destroy');
        });
    
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
