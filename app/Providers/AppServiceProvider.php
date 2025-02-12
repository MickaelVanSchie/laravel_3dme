<?php

namespace App\Providers;

use App\View\Components\FilamentCard;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        Blade::component('filament-card', FilamentCard::class);
        // todo: Deze directive fixen
        Blade::directive('img_tag', function ($expression) {
            list($caption, $number) = explode(',', str_replace(['(', ')', ' ', "'"], '', $expression));
            $img200 = asset("img/img$number-200.webp") . " 200w";
            $img1200 = asset("img/img$number-1200.webp") . " 1200w";
            $img1400 = asset("img/img$number-1400.webp") . " 1400w";
            $img1600 = asset("img/img$number-1600.webp") . " 1600w";
            return "<div class='col-sm-12 col-md-4 mb-4'><img
                    loading='lazysss'
                    sizes='(max-width: 1400px) 100vw, 1400px'
                    srcset='$img200, $img1200, $img1400'
                    src='$img1600'
                    alt=''>
                <div class='gallery-label'>
                    {{ $caption }}
                </div></div>";
        });
    }
}
