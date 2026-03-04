<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $basketOrders = [
            (object)[
                "id" => 1,
                "name" => "Mickael",
                "status" => "paid",
                "email" => "some@email.com",
                "orderDate" => "2024-01-01",
            ],
            (object)[
                "id" => 1,
                "name" => "Mickael",
                "status" => "paid",
                "email" => "some@email.com",
                "orderDate" => "2024-01-01",
            ]
        ];

        $totalOrders = count($basketOrders);

        return View("cms/dashboard", [
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
