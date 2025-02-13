<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductDetailController extends Controller
{
    public function show($id): View
    {
        $product = Product::findOrFail($id);
        return view('product_details', ['g' => new g(), 'product' => $product]);
    }
}
