<?php

use App\Http\Controllers\AddToBasketController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "show"])->name('main.home');
Route::post('/add-to-basket', [AddToBasketController::class, 'store'])->name('basket.add');

Route::prefix('/')
    ->name('main.')
    ->group(function () {
        // Static pages
        Route::get('/kleuren', [PageController::class, 'colors'])->name('colors');
        Route::get('/print-service', [PageController::class, 'printService'])->name('print-service');
        Route::get('/materiaal-keuze', [PageController::class, 'materialChoice'])->name('material-choice');

        // Request quotation
        Route::get('/offerte-aanvragen', [PageController::class, 'quotation'])->name('quotation');
        Route::post('/offerte-aanvragen', [PageController::class, 'quotationPost'])->name('quotation.post');

        // Contact
        Route::get('/contact', [PageController::class, 'contact'])->name('contact');
        Route::post('/contact', [PageController::class, 'contactPost'])->name('contact.post');

        // Winkelmand
        Route::get('/winkelmand', [BasketController::class, 'index'])->name('basket.index');
    });

// other routes
//require __DIR__ . '/user/account.php';
require __DIR__ . '/products.php';
