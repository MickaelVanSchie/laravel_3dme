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
    Route::get('product/{id}', [ProductDetailController::class, 'show'])->name('products.details');

    Route::get('products/{id}/add_to_basket/{$quantity}', function ($id, $quantity) {
        $product = Product::findOrFail($id);

        return view('add_to_basket', ['g' => new g(), 'product' => $product]);
    })->name('products.add_to_basket');
});
