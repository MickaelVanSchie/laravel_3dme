<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use g;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
                'products' => Product::where('category_id', $category->id)->get(),
                'main_categories' => MainCategory::where('id', $category->main_category_id)->get(),
                'product_categories' => ProductCategory::where('main_category_id', $category->main_category_id)->get(),
                'listed_products' => Product::where('category_id', $category->id)->get()->where('active', true),
            ]
        );
    }

    public function index(): View
    {
        $products = Product::all();
        $main_categories = MainCategory::all();
        $product_categories = ProductCategory::all();
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
