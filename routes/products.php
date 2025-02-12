<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [], function () {
    Route::get('catalogus', function () {
        $g = '';
        $products = \App\Models\Product::all();
        $main_categories = \App\Models\MainCategory::all();
        $product_categories = \App\Models\ProductCategory::all();
        return view('catalog', ['g' => $g, 'products' => $products, 'main_categories' => $main_categories, 'product_categories' => $product_categories]);
    })->name('products.catalog');
});
