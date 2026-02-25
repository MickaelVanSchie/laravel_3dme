<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductDetailController;
use Illuminate\Support\Facades\Route;

Route::group(
    [], function () {

    // Catalog
    Route::get('catalogus', [CatalogController::class, 'index'])->name('products.catalog');
    Route::get('catalogus/{id}', [CatalogController::class, 'show'])->name('products.catalog-category');
    // Product details
    Route::get('product/{url}', [ProductDetailController::class, 'show'])->name('products.details');
});
