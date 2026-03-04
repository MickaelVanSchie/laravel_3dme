<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageButton extends Component
{
    public int $pageNum;
    public int $totalOrders;
    public string $direction;

    public function __construct($pageNum, $totalOrders, $direction)
    {
        $this->pageNum = $pageNum;
        $this->totalOrders = $totalOrders;
        $this->direction = $direction;
    }

    public function render(): View|Closure|string
    {
        return view('components.page-button');
    }
}
