<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryUrl extends Component
{
    public string $name;
    public string $url;
    public function __construct($name, $url)
    {
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-url');
    }
}
