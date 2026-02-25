<?php

namespace App\Http\Controllers;

use App\Models\g;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class mat
{
    // Name maybe to generic
    public string $color;
    public string $material;

    public function __construct(string $color, string $material)
    {
        $this->color = $color;
        $this->material = $material;
    }
}

class material
{
    public string $name;
    public string $description;
    public string $glassTransition;
    public string $printTemp;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
        $this->glassTransition = '110';
        $this->printTemp = '220-240';
    }
}

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function colors(): View
    {
        $pla = [
            new mat('Zwart', 'black'),
            new mat('Blauw', 'blue'),
            new mat('Groen', 'green'),
            new mat('Grijs', 'gray'),
            new mat('Natuurlijk', 'natural'),
            new mat('Oranje', 'orange'),
            new mat('Paars', 'purple'),
            new mat('Rood', 'red'),
            new mat('Groenblauw', 'teal'),
            new mat('Wit', 'white'),
            new mat('Geel', 'yellow'),
        ];

        return view('colors', ['g' => new g(), 'pla' => $pla]);
    }

    public function printService(): View
    {
        return view('realiseer_uw_idee', ['g' => new g(), 'ab_test' => false]);
    }

    public function materialChoice(): View
    {
        $materials = [
            new material('PLA', 'Testdescription'),
        ];
        return view('material_choice', ['g' => new g(), 'materials' => $materials]);
    }

    public function quotation(): View {
        return view('quotation', ['g' => new g()]);
    }

    public function quotationPost(): View {
        return view('quotation', ['g' => new g()]);
    }

    public function contact(): View {
        return view('contact', ['g' => new g()]);
    }

    public function contactPost(Request $request) {
        // Todo: Implement sending emails when this form is filled.
        return view('contact', ['g' => new g()]);
    }
}
