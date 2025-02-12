<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $g = new g();
    $g->create_user();

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
    $reviews = [
        new review()
    ];

    return view('index', ['g' => $g, 'slogan' => $all_slogans[array_rand($all_slogans, 1)], 'reviews' => $reviews]);
});

Route::get('/kleuren', function () {
    $g = new g();
    $g->create_user();
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
    return view('colors', ['g' => $g, 'pla' => $pla]);
});

Route::get('/print_service', function () {
})->name('print_service');
Route::get('/contact', function () {
})->name('contact');

class mat
{
    public string $color;
    public string $material;

    public function __construct(string $color, string $material) {
        $this->color = $color;
        $this->material = $material;
    }
}

class g
{

    public $user = null;

    public function create_user()
    {
        $this->user = new User();
    }
}

class user
{
    public int $admin_level = 1;
}

class review
{
    public int $starnum = 4;
    public string $title = "Some Title";
    public string $text = "Some epic text";
    public string $author = "Some author";
}

// other routes
//require __DIR__ . '/user/account.php';
require __DIR__ . '/products.php';
