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

        Blade::directive('testimonial', function ($expression) {
            list($title, $text, $starnum, $author) = explode(',', str_replace(['(', ')', ' ', "'"], '', $expression));

            $stars = "";
            for ($i = 0; $i < $starnum; $i++) {
                $stars .= "<i class='fas fa-star' style='font-size: 1rem; color: #FFD700;'></i>";
            }
            return "<div class='card'>
            <div class='card-body bg-gray'
                 style='min-height: 350px; display: flex; flex-direction: column; box-shadow: 0 0 12px #444'>
                <div class='template-demo'>
                    <h3 class='card-title text-left h4'><i class='fas fa-quote-left testimonail-quote'></i>
                        $title</h3>
                    <p>$text</p>
                </div>
                <div class='text-center' style='margin-top: auto;'>
                    $stars
                    <div class='col-12'>
                        <p>$author</p>
                    </div>
                </div>
            </div>
        </div>";
        });
    }
}
