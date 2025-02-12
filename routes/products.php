<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Product;

Route::group(
    [], function () {
    Route::get('catalogus', function () {
        $g = '';
        $products = \App\Models\Product::all();
        $main_categories = \App\Models\MainCategory::all();
        $product_categories = \App\Models\ProductCategory::all();
        return view('catalog', ['g' => $g, 'products' => $products, 'main_categories' => $main_categories, 'product_categories' => $product_categories]);
    })->name('products.catalog');

    Route::get('product/{id}', function ($id) {
        $product = Product::findOrFail($id);
        return view('product_details', ['g' => new g(), 'product' => $product]);
    })->name('products.details');
});
