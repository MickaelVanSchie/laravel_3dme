<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

class AddToBasketController extends Controller
{
    public function store(Request $request): JsonResponse
    {

        if (!$request->hasValidSignature() && !$request->header('X-CSRF-TOKEN')) {
            Log::info("I got here 2");
            return response()->json(['error' => 'CSRF token mismatch'], 419);
        }

        // Todo Implement variants like they are implemented in the Python version of this app.
        $variants = [];

        $validated = $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1'
        ]);


        $basket = Session::get('basket', []);
        $productId = $validated['product_id'];
        $quantity = $validated['quantity'];
        $orderType = 'stockItem';

        $productFound = false;

        foreach ($basket as $key => $value) {
            if ($value['productId'] == $productId) {
                $basket[$key]['quantity'] += $quantity;
                $productFound = true;
                break;
            }
        }

        if (!$productFound) {
            $basketItem = (object)[
                'orderId' => count($basket) + 1,
                'productId' => $productId,
                'quantity' => $quantity,
                'orderType' => $orderType,
                'variants' => $variants,
            ];
            $basket[] = $basketItem;
        }

        Log::info($basket);

        Session::put('basket', $basket);

        return response()->json(['msg' => 'ok']);
    }
}
