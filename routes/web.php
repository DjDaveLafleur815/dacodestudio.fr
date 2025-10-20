<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\ProjectController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\QuoteController;

/*
|--------------------------------------------------------------------------
| Routes du site D-A Code Studio
|--------------------------------------------------------------------------
*/

// 🏠 Accueil + À propos
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/a-propos', [PageController::class, 'about'])->name('about');

// 💡 Services
Route::get('/services', [ServiceController::class, 'index'])->name('services');

// 💼 Portfolio
Route::get('/portfolio', [ProjectController::class, 'index'])->name('app.portfolio');

// 📰 Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// ✉️ Contact
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

// 💰 Devis
Route::get('/devis', [QuoteController::class, 'showForm'])->name('quote.show');
Route::post('/devis', [QuoteController::class, 'submitForm'])->name('quote.submit');

