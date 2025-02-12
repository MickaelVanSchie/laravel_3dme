<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReviewCard extends Component
{
    public string $title;
    public string $text;
    public int $stars;
    public string $author;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $text, $stars, $author)
    {
        $this->title = $title;
        $this->text = $text;
        $this->stars = $stars;
        $this->author = $author;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.review-card');
    }
}
