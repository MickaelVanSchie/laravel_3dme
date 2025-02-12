<?php

namespace App\View\Components;

use App\Models\MainCategory;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CategoryType extends Component
{
    /**
     * Create a new component instance.
     */
    public MainCategory $mainCategory;
    public function __construct(MainCategory $mainCategory)
    {
        $this->mainCategory = $mainCategory;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-type');
    }
}
