<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Product;
use g;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function show(): View
    {
        $products = \App\Models\Product::all();
        $main_categories = MainCategory::all();
        $product_categories = \App\Models\ProductCategory::all();
        return view(
            'catalog',
            [
                'g' => new g(),
                'products' => $products,
                'main_categories' => $main_categories,
                'product_categories' => $product_categories,
                'listed_products' => Product::where('active', true)->get(),
            ]
        );
    }
}
