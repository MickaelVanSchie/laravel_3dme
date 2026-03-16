<?php

namespace App\Http\Controllers;

use App\Models\BasketOrder;
use App\Models\g;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {

        $basketOrders = BasketOrder::all();

        $totalOrders = count($basketOrders);

        return View("cms/dashboard", [
            "g" => new g(),
            "direction" => "asc",
            "sort" => "name",
            "page" => 1,
            "totalOrders" => $totalOrders,
            "basketOrders" => $basketOrders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
