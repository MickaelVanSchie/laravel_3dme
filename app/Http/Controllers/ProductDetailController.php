<?php

namespace App\Http\Controllers;

use App\Models\g;
use App\Models\Product;
use Illuminate\View\View;

class ProductDetailController extends Controller
{
    public function show($url): View
    {
        $product = Product::where('url', $url)->firstOrFail();
        return view('product_details', ['g' => new g(), 'product' => $product, 'preset_keys' => "", 'default_selection' => ""]);
    }
}
