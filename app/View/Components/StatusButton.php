<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusButton extends Component
{
    /**
     * Create a new component instance.
     */
    public string $status;
    public string $statusClass;
    public function __construct($status)
    {
        $statusLut = [
            "paid" => "text-bg-success",
            "completed" => "text-bg-success",
            "shipped" => "text-bg-success",
            "new" => "text-bg-warning",
            "hold" => "text-bg-warning",
            "cancelled" => "text-bg-danger",
        ];

        $this->status = $status;
        $this->statusClass = $statusLut[$status];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.status-button');
    }
}
