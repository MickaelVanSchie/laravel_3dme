<?php

namespace App\Http\Controllers;
use App\Models\g;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }

    public function show(): View
    {
        $all_slogans = [
            "Innovatief en persoonlijk: onze 3D-printing service brengt jouw ideeën tot leven!",
            "Jouw visie, onze expertise: 3D-printing op maat!",
            "Innovatief en duurzaam: onze 3D-printing service voor de toekomst!",
            "Kwaliteit gegarandeerd: onze 3D-printing service zorgt voor precisie en detail!",
            "Van schets tot tastbaarheid: onze 3D-printing service maakt het mogelijk!",
            "Wij maken het onmogelijke mogelijk met 3D-printing!",
            "Jouw creativiteit, onze 3D-printing: een perfecte match!",
            "Breng je ideeën tot leven met onze 3D-printing service!"
        ];
        return view('index', ['g' => new g(), 'slogan' => $all_slogans[array_rand($all_slogans, 1)], 'reviews' => \App\Models\Review::all()]);
    }
}
