<?php

namespace App\Http\Controllers;

use App\Models\g;
use App\Models\Product;

class BasketController extends Controller
{
    public function index()
    {
        $basket = session('basket');
        $b = [];

        $productIds = collect($basket)->pluck('productId')->unique();
        $products = Product::whereIn('id', $productIds)->get()->keyBy('id');

        foreach ($basket as $basketItem) {
            $product = $products[$basketItem->productId] ?? null;
            if (!$product) continue;

            $basketItem->totalPrice = $product->price * $basketItem->quantity;
            $basketItem->vat = $basketItem->totalPrice * 0.21;
            $basketItem->product = $product;
            $b[] = $basketItem;
        }

        $shippingCost = 10;
        // TODO: calculate max shipping rate based on basket items.

        // TODO: Build Price calculator and use said calculation module to have this logic in one place.
        $total = (object)[
            'total' => collect($b)->sum('totalPrice') + $shippingCost,
            'shippingCost' => $shippingCost,
            'vat' => collect($b)->sum('vat')
        ];


        return view('checkout/basket', ['basket' => $b, 'g' => new g(), 'total' => $total]);
    }

    public function remove($id)
    {
        $basket = session('basket', []);

        foreach ($basket as $index => $item) {
            if ($item->orderId == $id) {
                unset($basket[$index]);
            }
            break;
        }

        session(['basket' => $basket]);

        return redirect()->route('main.basket.index');
    }
}
