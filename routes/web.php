<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Rutas públicas (Landing Page)
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/contacto', 'contacto')->name('contacto');
Route::post('/contacto', [ContactController::class, 'send'])->name('contact.send');

Route::get('/reservas', [BookingController::class, 'create'])->name('booking.create');
Route::post('/reservas', [BookingController::class, 'store'])->name('booking.store');

/*
|--------------------------------------------------------------------------
| Dashboard protegido con autenticación
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Perfil del usuario (Breeze)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Rutas de autenticación (Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

