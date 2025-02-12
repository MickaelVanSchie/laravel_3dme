<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FilamentCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $name;
    public $imageUrl;
    public function __construct($name, $imageUrl)
    {
        $this->name = $name;
        $this->imageUrl = $imageUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filament-card');
    }
}
