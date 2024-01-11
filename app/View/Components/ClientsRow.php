<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClientsRow extends Component
{
    /**
     * Create a new component instance.
     */
    public $icons;

    public function __construct($icons)
    {
        $this->icons = $icons;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.clients-row');
    }
}
