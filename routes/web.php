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

Route::get('/print_service', function () {})->name('print_service');
Route::get('/contact', function () {})->name('contact');

class g {

    public $user = null;
    public function create_user() {
        $this->user = new User();
    }
}

class user {
    public int $admin_level = 1;
}

class review {
    public int $starnum = 4;
    public string $title = "Some Title";
    public string $text = "Some epic text";
    public string $author = "Some author";
}

// other routes
require __DIR__ . '/user/account.php';
