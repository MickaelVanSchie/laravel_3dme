<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductDetailController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::group(
    [], function () {

    // Catalog
    Route::get('catalogus', [CatalogController::class, 'show'])->name('products.catalog');
    // Product details
    Route::get('product/{url}', [ProductDetailController::class, 'show'])->name('products.details');
});
