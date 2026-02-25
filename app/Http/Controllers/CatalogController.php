<?php

namespace App\Http\Controllers;

use App\Models\g;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function show(string $id): View
    {
        $category = ProductCategory::where('name', $id)->firstOrFail();
        return view(
            'catalog',
            [
                'g' => new g(),
                'products' => Product::all(),
                'main_categories' => MainCategory::all(),
                'product_categories' => ProductCategory::all(),
                'listed_products' => Product::where('category_id', $category->id)->get()->where('active', true),
            ]
        );
    }

    public function index(): View
    {
        return view(
            'catalog',
            [
                'g' => new g(),
                'products' => Product::all(),
                'main_categories' => MainCategory::all(),
                'product_categories' => ProductCategory::all(),
                'listed_products' => Product::where('active', true)->get(),
            ]
        );
    }
}
