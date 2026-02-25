<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

class AddToBasketController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function store(Request $request): JsonResponse
    {
        if (!$request->hasValidSignature() && !$request->header('X-CSRF-TOKEN')) {
            return response()->json(['error' => 'CSRF token mismatch'], 419);
        }

        $validated = $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1'
        ]);

        $basket = Session::get('basket', []);

        $productId = $validated['product_id'];
        $quantity = $validated['quantity'];

        if (isset($basket[$productId])) {
            $basket[$productId] += $quantity;
        } else {
            $basket[$productId] = $quantity;
        }

        Session::put('basket', $basket);

        return response()->json(['status' => 'ok']);
    }
}
