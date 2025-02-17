<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use g;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductDetailController extends Controller
{
    public function show($url): View
    {
        $product = Product::where('url', $url)->firstOrFail();
        return view('product_details', ['g' => new g(), 'product' => $product]);
    }
}
