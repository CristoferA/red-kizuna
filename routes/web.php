<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/contacto', 'contacto')->name('contacto');
Route::post('/contacto', [ContactController::class, 'send'])->name('contact.send');
