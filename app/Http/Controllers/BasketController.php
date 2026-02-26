<?php

namespace App\Http\Controllers;

use App\Models\g;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class BasketController extends Controller
{
    public function index()
    {
        $basket = session('basket');

        $productIds = collect($basket)->pluck('productId')->unique();
        $products = Product::whereIn('id', $productIds)->get()->keyBy('id');
        Log::info($products);

        $total = 0;

        return view('checkout/basket', ['basket' => $basket, 'g' => new g(), 'products' => $products, 'total' => $total]);
    }
}
