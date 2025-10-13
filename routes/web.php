<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('main.home');
Route::get('/a-propos', [PageController::class, 'about'])->name('app.about');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('app.portfolio');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

