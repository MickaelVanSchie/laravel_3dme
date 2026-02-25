<?php

namespace App\Http\Controllers;

use App\Models\g;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BasketController extends Controller
{
    public function index()
    {
        $basket = session('basket');
        Log::debug('Basket content:', ['basket' => $basket]);

        return view('basket', ['basket' => $basket, 'g' => new g()]);
    }
}
