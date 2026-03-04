<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SortButtonComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public string $text;
    public string $sortProperty;
    public string $sortDirection;
    public int $pageNum;

    public function __construct($sortDirection, $text, $sortProperty, $pageNum)
    {
        $this->sortDirection = $sortDirection == 'desc' ? 'asc' : 'desc';
        $this->text = $text;
        $this->sortProperty = $sortProperty;
        $this->pageNum = $pageNum;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sort-button-component');
    }
}
