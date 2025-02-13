<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "show"])->name('main.home');

Route::get('/kleuren', function () {
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
});

Route::get('/print_service', function () {
    return view('realiseer_uw_idee', ["g" => new g(), 'ab_test' => false]);
})->name('main.print_service');

Route::get('/contact', function () {
    return view('contact', ["g" => new g()]);
})->name('main.contact');

Route::get('/offerte-aanvragen', function () {
    return "hi";
})->name('main.quotation');


class mat
{
    public string $color;
    public string $material;

    public function __construct(string $color, string $material)
    {
        $this->color = $color;
        $this->material = $material;
    }
}

class g
{

    public $user = null;

    public function __construct()
    {
        $this->user = new User();
    }
}

class user
{
    public int $admin_level = 1;
}


// other routes
//require __DIR__ . '/user/account.php';
require __DIR__ . '/products.php';
